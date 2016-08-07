<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bac".
 *
 * @property integer $id
 * @property integer $ten
 * @property integer $status
 */
class Bac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten'], 'required'],
            [['ten'], 'string', 'max' => 255],
            [[ 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','serial'),
            'ten' => Yii::t('app','Name'),
            'status' => Yii::t('app','Status'),
        ];
    }
    public function getStatusText($value)
    {
        $statusArr=array(0=>'InActive',1=>'Active');
        if(isset($statusArr[$value]))
        {
            return $statusArr[$value];
        }
        else
            return "Unknown";
    }
    public function getListStatus()
    {
        $statusArr=array(0=>'InActive',1=>'Active');
        return $statusArr;
    }
}
