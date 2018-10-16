<?php


namespace app\controllers;

use yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        Yii::trace("I'm here", "site");
        Yii::info("some information", "site");
        Yii::warning("low memory", "site");
        Yii::error("Fatall","site");

        return $this->render('index');
    }
    public function actionJoin()
    {
        return $this->render('join');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }
}