<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id_gv
 * @property string $ho_ten
 * @property integer $id_to_bo_mon
 * @property integer $id_Khoa
 * @property integer $dinh_muc
 * @property double $he_so_luong
 * @property integer $id_ngach
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ho_ten', 'id_to_bo_mon', 'id_Khoa', 'dinh_muc', 'he_so_luong', 'id_ngach'], 'required'],
            [['id_to_bo_mon', 'id_Khoa', 'dinh_muc', 'id_ngach'], 'integer'],
            [['he_so_luong'], 'number'],
            [['ho_ten'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gv' => Yii::t('app','serial'),
            'ho_ten' => Yii::t('app','full name'),
            'id_to_bo_mon' => Yii::t('app','gruop room'),
            'id_Khoa' => Yii::t('app','Khoa'),
            'dinh_muc' => Yii::t('app','Dinh Muc'),
            'he_so_luong' =>  Yii::t('app','He So Luong'),
            'id_ngach' =>  Yii::t('app','Id Ngach'),
        ];
    }
}
