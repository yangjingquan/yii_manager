<?php
namespace app\models;
use yii\db\ActiveRecord;
class Bis extends ActiveRecord{

    public static function tableName(){
        return '{{%bis}}';
    }

    public function rules(){
        return ['id','cat_id','bis_name','leader','citys','address','link_tel',
            'link_mobile','email','config_type','create_time','status','transport_fee','ykj_price',
            'is_pintuan','logistics_status','fahuo_template_id','appid','secret','mchid','key','thumb',
            'id_no','pro_total_amount','transport_fee','selected_transport_type','appid','secret',
            'acode','is_ind_version'];
    }

    public function getOrders(){
        $orders = $this->hasMany(MainOrder::className(),['bis_id' => 'id'])->limit(10,20)->asArray();
        return $orders;
    }

}
