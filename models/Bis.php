<?php
namespace app\models;
use yii\db\ActiveRecord;
class Bis extends ActiveRecord{

    public static function tableName(){
        return '{{%bis}}';
    }

    public function rules(){
        return array('id,cat_id,bis_name,brand,leader,citys,address,link_tel,link_mobile,email,
                    config_type,create_time,status,transport_type,ykj_price,is_pintuan,logistics_status,
                    fahuo_template_id,appid,secret,mchid,key,thumb,jifen,acode,is_ind_version');
    }
}
