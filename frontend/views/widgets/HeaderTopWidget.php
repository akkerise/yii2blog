<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 09/09/2017
 * Time: 11:10
 */

namespace frontend\views\widgets;


use yii\base\Widget;
use yii\helpers\Html;

class HeaderTopWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('HeaderTopWidget');
    }
}