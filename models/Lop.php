<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lop".
 *
 * @property integer $id_lop
 * @property string $ten_lop
 * @property integer $si_so
 * @property integer $status
 */
class Lop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'ten_lop', 'si_so'], 'required'],
            [[ 'si_so', 'status'], 'integer'],
            [['ten_lop'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lop' => Yii::t('app','Serial'),
            'ten_lop' =>  Yii::t('app','Name'),
            'si_so' =>  Yii::t('app','Number'),
            'status' =>  Yii::t('app','Status'),
        ];
    }
    public function getStatusText($key)
    {
        $arr=array(0=>'Inactive',1=>'Active');
        if(isset($arr[$key]))
        {
            return $arr[$key];
        }
        else
            return "Unknown";
    }
    public function getArrStatus()
    {
        $arr=array(0=>'Inactive',1=>'Active');
        return $arr;
    }
}
