<?php
/**
 * Created by PhpStorm.
 * User: Карно
 * Date: 30.05.2016
 * Time: 10:26
 */

namespace app\controllers;


class MigrationController extends Controller
{
    public function getMenu()
    {
        return [
            ['label' => 'List', 'url' => ['/migration/index']],
            ['label' => 'Create new', 'url' => ['/migration/create']],
            ['label' => 'Load', 'url' => ['/migration/load']],
            ['label' => 'Settings', 'url' => ['/migration/setting']],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionLoad()
    {
        return $this->render('load');
    }

    public function actionSetting()
    {
        return $this->render('setting');
    }
}