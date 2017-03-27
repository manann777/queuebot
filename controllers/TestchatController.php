<?php


namespace app\controllers;
use yii;
use yii\helpers\Json;
use yii\web\Controller;

class TestchatController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
        public function actionHumanmsg(){
            if(Yii::$app->request->post()){

                return Json::encode(['success'=>true,'msgbot'=>'HELLO']);
            }

        }
}
