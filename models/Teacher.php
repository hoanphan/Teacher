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
            'id_to_bo_mon' => 'Tổ bộ môn',
            'id_Khoa' =>'Phòng khoa',
            'dinh_muc' => Yii::t('app','Dinh Muc'),
            'he_so_luong' =>  Yii::t('app','He So Luong'),
            'id_ngach' =>  Yii::t('app','Id Ngach'),
        ];
    }
    public function TenNgach($key)
    {
        $ngach=Ngach::findOne($key);
        if(isset($ngach))
        {
            return $ngach->ten_ngach;
        }
        else
            return "unknown";
    }
    public function LayPhongBan($key)
    {
        $phong=PhongKhoa::findOne($key);
        if(isset($phong)) {
            return $phong->ten;
        }
        else
            return "Unknown";

    }
    public function LayTenTo($key)
    {
        $khoa=To_Bo_Mon::findOne($key);
        if(isset($khoa))
            return $khoa->ten;
        else
            return "Unknown";
    }
}
