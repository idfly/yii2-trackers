<?php

namespace idfly\trackers\controllers;

class IndexController extends \yii\base\Controller
{
    public function actionIndex()
    {
        return \idfly\settings\Settings::get(['trackers', 'Code'], '');
    }
}