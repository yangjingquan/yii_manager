<?php
namespace app\models;
use yii\db\ActiveRecord;
class Order extends ActiveRecord{

    public function getCustomer(){
        $Customer = $this->hasOne(Customer::className(),['id' => 'c_id'])->asArray();
        return $Customer;
    }
}
