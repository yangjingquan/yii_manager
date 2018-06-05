<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/5/4
 * Time: 下午6:41
 */
namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller{
    public function actionTest(){
        echo 'This is branch_changeIndex1';
    }

    public function actionIndex(){
        echo 'This is indexTest';
    }

    public function actionGetStrInfo(){
        echo 'This is getStrInfo method';
    }

}
