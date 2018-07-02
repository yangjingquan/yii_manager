<?php
namespace app\models;
use yii\db\ActiveRecord;
class Members extends ActiveRecord{

    public static function tableName(){
        return '{{%members}}';
    }

    public function rules(){
        return ['id','bis_id','mem_id','username','nickname','truename','type',
            'password','email','id_number','sex','age','province_id','city_id',
            'address','postcode','mobile','telephone','qq','pre_deposit','jifen','create_time',
            'last_login_time','login_times','is_fenxiao','status','rec_id','ketixian',
            'tixianzhong','code_url','avatarUrl','city','country','province','direct_selling_income','team_status'];
    }

    public function getOrders(){
        $orders = $this->hasMany(MainOrder::className(),['mem_id' => 'mem_id'])->where(['status' => 1])->asArray();
        return $orders;
    }

}
