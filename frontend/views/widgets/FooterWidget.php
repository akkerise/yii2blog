<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 08/09/2017
 * Time: 17:17
 */
namespace frontend\views\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class FooterWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('FooterWidget');
    }
}