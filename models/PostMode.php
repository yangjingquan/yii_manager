<?php
namespace app\models;
use yii\db\ActiveRecord;
class PostMode extends ActiveRecord{

    public static function tableName(){
        return '{{%post_mode}}';
    }

    public function rules(){
        return ['id','post_mode','status','continue_stage','post_code'];
    }
}
