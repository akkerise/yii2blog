<?php
use yii\helpers\Html;
?>
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="<?= Yii::$app->homeUrl ?>"><img src="/yii2blog/frontend/web/images/home/logo.png" alt=""/></a>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            USA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">UK</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            DOLLAR
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canadian Dollar</a></li>
                            <li><a href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="<?= Yii::$app->homeUrl ?>blog/listblog"><i class="fa"><span class="glyphicon glyphicon-list-alt"></i> Blog</a></li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <li><a href="<?= Yii::$app->homeUrl ?>site/login"><i class="fa fa-lock"></i> Login</a></li>
                            <li><a href="<?= Yii::$app->homeUrl ?>site/signup"><i class="fa fa-lock"></i> Signup</a>
                            </li>
                        <?php } else { ?>
                            <li><a href="<?= Yii::$app->homeUrl ?>site/logout" data-method="post"><i class="fa fa-lock"></i>
                                    (<?= Yii::$app->user->identity->username ?>)Logout</a></li>
                            <?php
                            $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>';
                            ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->