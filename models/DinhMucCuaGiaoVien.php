<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dinh_muc_cua_giao_vien".
 *
 * @property integer $id
 * @property integer $id_teacher
 * @property string $name_norms
 * @property integer $number
 * @property integer $status
 */
class DinhMucCuaGiaoVien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dinh_muc_cua_giao_vien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'id_teacher', 'name_norms', 'number'], 'required'],
            [['id', 'id_teacher', 'number', 'status'], 'integer'],
            [['name_norms'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_teacher' => 'Tên giáo viên',
            'name_norms' => 'Tên định mức',
            'number' => 'Số lượng định mức',
            'status' => 'Trạng thái',
        ];
    }
    public function getNameTeacher($id_teacher)
    {
        $teacher=Teacher::findOne($id_teacher)->ho_ten;
        if(isset($teacher))
        {
            return $teacher;

        }
        else
            return 'Unknown';
    }
    public  function getNameNorm($id_Norm)
    {

        $norm=TenDinhMuc::findOne($id_Norm);
        if(isset($norm))
        {
            return $norm->ten_loai_dinh_muc;
        }
        else
            return $norm;
    }
    public function getTextStatus($status)
    {
        $arr=array(0=>'Inactive',1=>'Active');
        if(isset($arr[$status]))
            return $arr[$status];
        else
            return 'Unknown';
    }

}
