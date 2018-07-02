<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/6/30
 * Time: 下午12:13
 */
namespace app\controllers;

use app\models\MainOrder;
use app\models\Members;
use yii\web\controller;

class OrderController extends controller{

    //获取个人订单信息
    public function actionGetOrders(){
        $request = \Yii::$app->request;
        $wx_id = $request->get('wx_id','');
        $type = $request->get('type',1);
        $memberInfo = Members::find()->where(['mem_id' => $wx_id])->one();
        $orderInfo = $memberInfo->orders;
        print_r($orderInfo);
        die;
    }
}