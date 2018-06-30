<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/6/30
 * Time: 下午12:13
 */
namespace app\controllers;

use yii\web\controller;
use app\models\Bis;

class IndexController extends controller{

    public function actionGetOrders(){
        $request = \Yii::$app->request;
        $bis_id = $request->get('bis_id','');
        $bisInfo = Bis::find()->where(['id' => $bis_id])->one();
        $orderInfo = $bisInfo->orders;
        print_r($orderInfo);
        die;
    }
}