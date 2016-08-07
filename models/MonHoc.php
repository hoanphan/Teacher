<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mon_hoc".
 *
 * @property integer $id_mon
 * @property string $te_mon
 * @property integer $status
 */
class MonHoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mon_hoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['te_mon'], 'required'],
            [['status'], 'integer'],
            [['te_mon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mon' => 'Mã môn',
            'te_mon' => 'Tên môn',
            'status' => 'Trạng thái',
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
    public function getListStatus()
    {
        $arr=array(0=>'Inactive',1=>'Active');
        return $arr;
    }
}
