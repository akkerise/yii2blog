<?php

namespace frontend\controllers;


use Yii;
use app\models\Blog;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Tag;
use app\models\User;
use app\models\Image;
use yii\helpers\ArrayHelper;
use common\shareds\ConvertUntils;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;
use yii\data\Pagination;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{

    public $layout = 'blog';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Blog models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Blog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $userGroup = ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username');
        $tagGroup = ArrayHelper::map(Tag::find()->asArray()->all(), 'id', 'tag_name');

        $model = new Blog();
        if ($model->load(Yii::$app->request->post())) {
            $blogImageName = ConvertUntils::renameStringForImageName($model->title);

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs(Yii::getAlias('@webroot') . '/uploads/blogs/' . $blogImageName . '.' . $model->file->extension);

            $model->created_at = time();
            $model->updated_at = time();
            $model->save();
            $image = new Image();
            $image->image_name = $blogImageName;
            $image->image_src = Yii::getAlias('@webroot') . '/uploads/blogs/' . $blogImageName . '.' . $model->file->extension;
            $image->blog_id = $model->id;
            $image->created_at = time();
            $image->updated_at = time();
            $image->save();


            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'userGroup' => $userGroup,
                'tagGroup' => $tagGroup,
            ]);
        }
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
       $userGroup = ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username');
       $tagGroup = ArrayHelper::map(Tag::find()->asArray()->all(), 'id', 'tag_name');
       $model = $this->findModel($id);

       if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view', 'id' => $model->id]);
    } else {
        return $this->render('update', [
            'model' => $model,
            'userGroup' => $userGroup,
            'tagGroup' => $tagGroup,
        ]);
    }
}

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionListblog()
    {
        $blogs = Blog::find()->asArray()->all();

        $pages = new Pagination(['totalCount' => count($blogs),'pageSize' => '3']);
        $blogs = Blog::find()->asArray()->offset($pages->offset)->limit($pages->limit)->all();

        
        if($blogs !== null){
            return  $this->render('list-blog', [
                'blogs' => $blogs,
                'pages' => $pages
            ]);
        }

    }

    public function actionGetblogbyid($id)
    {

        $blog = Blog::findOne($id);
        if(!$blog){
            return $this->redirect(['listblog']);
        }

        $blog_image = Image::find()->where(['blog_id' => $id])->asArray()->all();
        $user_blog = User::find()->where(['id' => $blog['user_id']])->asArray()->one();
        return $this->render('blog-by-id', [
            'blog' => $blog,
            'img' => $blog_image,
            'user_blog' => $user_blog
        ]);
    }

    public function getPageBlog()
    {
        $blogs = Blog::find()->offset($pages->offset)->limit($pages->limit)->asArray()->all();

        for ($i=1; $i < 60; $i++) { 
            $blogs[$i] = $blogs[0];
        }
        $pages = new Pagination(['totalCount' => count($blogs),'pageSize' => '6']);
        return $pages;
    }

}
