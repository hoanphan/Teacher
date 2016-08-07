<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phong_khoa".
 *
 * @property integer $id_khoa
 * @property integer $ten
 */
class PhongKhoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phong_khoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten'], 'required'],
            [['ten'], 'string','max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_khoa' => Yii::t('app','serial'),
            'ten' => Yii::t('app','name'),
        ];
    }
}
