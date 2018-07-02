<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\query;
class MainOrder extends ActiveRecord{

    public static function tableName(){
        return '{{%main_orders}}';
    }

    public function rules(){
        return ['id','bis_id','mem_id','address_id','transaction_id','order_no','prepay_id',
            'mode','payment','delivery_cost','total_amount','express_no','create_time','update_time',
            'order_status','remark','status','rec_name','address','mobile','rec_income','rec_id',
            'id_no','pro_total_amount','transport_fee','selected_transport_type','appid','secret',
            'pay_time','order_from','jifen'];
    }

}
