<?php
use app\models\Category;
use app\models\Brand;
?>

<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->

        <?php foreach ($dataCategories as $k => $v) { ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#<?= $v['keywords'] ?>">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            <?= $v['category_name'] ?>
                        </a>
                    </h4>
                </div>

                <div id="<?= $v['keywords'] ?>" class="panel-collapse collapse">
                    <?php 
                        $dataSub = new Category();
                        $dataSub = $dataSub->getCategoriesByParentID($v['id']);
                        if($dataSub){
                     ?>
                     <div class="panel-body">
                        <ul>
                            <?php foreach ($dataSub as $key => $value) { ?>
                                    <li><a href=""><?= $value['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>

        <?php } ?>
    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <?php foreach ($dataBrands as $k => $v) { ?>
                    <li><a href="#"> <span class="pull-right">(<?= strlen($v['brand_name']) ?>)</span><?= $v['brand_name'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div><!--/brands_products-->

    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="<?= Yii::$app->getHomeUrl() . 'frontend/web/' ?>images/home/shipping.jpg" alt="" />
    </div><!--/shipping-->

</div>