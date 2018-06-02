<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/5/4
 * Time: 下午6:41
 */
namespace app\controllers;
use yii\web\Controller;
use yii\db\ActiveRecord;

class IndexController extends ActiveRecord{
    public function actionTest(){
        echo 111;
    }

}
