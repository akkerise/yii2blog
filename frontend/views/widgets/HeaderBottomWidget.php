<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 09/09/2017
 * Time: 11:12
 */
namespace frontend\views\widgets;


use yii\base\Widget;
use yii\helpers\Html;

class HeaderBottomWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('HeaderBottomWidget');
    }
}