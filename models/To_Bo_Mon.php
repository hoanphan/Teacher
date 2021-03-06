<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "to_bo_mon".
 *
 * @property integer $id_to_bo_mon
 * @property string $ten
 * @property integer $id_khoa
 */
class To_Bo_Mon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_bo_mon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'id_khoa'], 'required'],
            [['id_khoa'], 'integer'],
            [['ten'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_to_bo_mon' => Yii::t('app','serial'),
            'ten' => Yii::t('app','name'),
            'id_khoa' => Yii::t('app','Department'),
        ];
    }
    public function getTextPhong($value)
    {
        $phongKhoa=PhongKhoa::findOne($value);
        if(isset($phongKhoa))
        {
            return $phongKhoa->ten;
        }
        else
            return "Unknown";
    }
}
