<?php
/**
 * Created by PhpStorm.
 * User: Карно
 * Date: 30.05.2016
 * Time: 10:26
 */

namespace app\controllers;


class Controller extends \yii\web\Controller
{
    public $layout = 'left-column';

    public function getMenu()
    {
        return [];
    }
}