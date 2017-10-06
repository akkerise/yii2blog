<?php

use frontend\views\widgets\pages\CategoryTabWidget;
use frontend\views\widgets\pages\FeaturesItemWidget;
use frontend\views\widgets\pages\RecommendedItems;

$this->title = $name;
?>

<?= CategoryTabWidget::widget() ?>
<?= FeaturesItemWidget::widget() ?>
<?= RecommendedItems::widget() ?>
