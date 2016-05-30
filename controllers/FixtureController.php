<?php
/**
 * Created by PhpStorm.
 * User: Карно
 * Date: 30.05.2016
 * Time: 10:27
 */

namespace app\controllers;


class FixtureController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}