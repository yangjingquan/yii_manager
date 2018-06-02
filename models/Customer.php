<?php

namespace app\models;
use yii\db\ActiveRecord;
class Customer extends ActiveRecord{

    public function getOrders(){
        $orders = $this->hasMany(Order::className(),['c_id' => 'id'])->asArray();
        return $orders;
    }

    public function getOrderPrice(){
        return '99.99';
    }
}
