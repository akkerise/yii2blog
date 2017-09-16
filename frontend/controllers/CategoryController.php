<?php

namespace frontend\controllers;

use Yii;
use app\models\Category;
use app\models\CategorySearch;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\shareds\ConvertUntils;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{

    public $layout = 'category';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post())) {

            // Get the instance of the uploaded file
            $iconName = str_replace(' ', '-', trim(strtolower(ConvertUntils::removeDiacritical($model->category_name))));
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs(Yii::getAlias('@webroot') . '/uploads/category-icons/' . $iconName . '.' . $model->file->extension);

            $model->status = 0;
            $model->created_at = time();
            $model->updated_at = time();
            $model->keywords = $iconName;
            // Save the path of file in the db column
            $model->icon = Yii::getAlias('@web') . '/uploads/category-icons/' . $iconName . '.' . $model->file->extension;
            try {
                $model->save();
            } catch (Exception $e) {
                var_dump($e);
                die();
            }

            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $iconName = str_replace(' ', '-', trim(strtolower(ConvertUntils::removeDiacritical($model->category_name))));


            // Delete file old
            // if (file_exists(Yii::$app->basePath  . '/web/uploads/category-icons/' . $iconName . '.png')) {
                unlink(Yii::$app->basePath  . '/web/uploads/category-icons/' . $iconName . '.png');
            // }
            

            // Move new file in folder override old file
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs(Yii::getAlias('@webroot') . '/uploads/category-icons/' . $iconName . '.' . $model->file->extension);

            $model->status = 0;
            $model->updated_at = time();

            // Save the path of file in the db column
            $model->icon = Yii::getAlias('@web') . '/uploads/category-icons/' . $iconName . '.' . $model->file->extension;
            try {
                $model->save();
            } catch (Exception $e) {
                var_dump($e);
                die();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionListbycateid($id)
    {
        return  $this->render('list-by-cate-id', [
            'id' => $id
        ]);
    }
}
