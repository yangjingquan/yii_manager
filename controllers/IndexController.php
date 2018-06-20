<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/6/9
 * Time: 上午8:02
 */
namespace app\controllers;
use yii\web\Controller;
use app\models\MainOrder;
use app\models\Bis;

class IndexController extends Controller{
    public function actionTest()
    {
        echo 'This is branch_changeIndex';
    }

    public function actionIndex()
    {
        echo 'This is indexTest';
    }

    public function actionGetStrInfo()
    {
        echo 'This is getStrInfo method';
    }

    public function actionTestConflict()
    {
        echo 'This is testConflict method';
    }

    public function actionEx1()
    {
        echo 'This is ex1 method';
    }

    public function actionEx2()
    {
        echo 'This is ex2 method';
    }

    public function actionGetOrderList(){
        $bis_name = '轻商电商';
        $bis_info = Bis::find()->where(['bis_name' => $bis_name])->one();
        $orders = $bis_info->orders;
        print_r($orders);
        die;
    }
}