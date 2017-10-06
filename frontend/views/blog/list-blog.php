<?php
use app\models\User;
use app\models\Blog;
use app\models\Image;
use yii\data\Pagination;
use yii\widgets\LinkPager;
use yii\helpers\VarDumper;
?>
<div class="blog-post-area">
	<h2 class="title text-center">Latest From our Blog</h2>

	<?php foreach ($blogs as $k => $v) { ?>
	<div class="single-blog-post">
		<h3><?= $v['title'] ?></h3>
		<div class="post-meta">
			<ul>
				<li><i class="fa fa-user"></i> <?= User::find()->where(['id' => $v['user_id']])->asArray()->one()['full_name'] ?></li>
				<li><i class="fa fa-clock-o"></i> <?= Yii::$app->formatter->asTime($v['created_at']) ?></li>
				<li><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($v['created_at'], 'long') ?></li>
			</ul>
			<span>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</span>
		</div>

		<a href="<?= Yii::$app->homeUrl . 'blog/getblogbyid/' . $v['id'] ?>">
			<?php
				$imgBlogById = Image::find()->where(['blog_id' => $v['id']])->asArray()->one();
			 ?>
			<img src="<?= str_replace('/var/www/html', '', $imgBlogById['image_src']) ?>" alt="">
		</a>

		<?= substr(strip_tags(($v['content'])), 0, 1000) . '...'?>
		<a  class="btn btn-primary" href="<?= Yii::$app->homeUrl . 'blog/getblogbyid/' . $v['id'] ?>">Read More</a>
	</div>
	<?php } ?>
	
	<!-- <div class="pagination-area">
		<ul class="pagination">
			<li><a href="" class="active">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
		</ul>
	</div> -->

	<?php 
		echo LinkPager::widget([
			'pagination' => $pages,
		]);
	?>
</div>