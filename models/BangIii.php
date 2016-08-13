<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bang_iii".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property string $ten
 * @property string $nhiem_thu
 * @property string $so_gio_chuan
 * @property integer $status
 */
class BangIii extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bang_iii';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'ten', 'nhiem_thu', 'so_gio_chuan'], 'required'],
            [['id_gv', 'status'], 'integer'],
            [['ten', 'nhiem_thu', 'so_gio_chuan'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'id_gv' => 'Giảng viên thực hiện',
            'ten' => 'Tên đề tài /Bài báo đăng trên tạp chí chuyên ngành',
            'nhiem_thu' => 'Ngày, QĐ nghiệm thu',
            'so_gio_chuan' => 'Số giờ chuẩn',
            'status' => 'Trạng thái',
        ];
    }

    /**
     * @return string
     */
    public function getStatusText($value)
    {
       if($value==0)
           return "Inactive";
        elseif ($value==1)
            return "Active";
        else
            return "Unknown";
    }
    public function getListStatus()
    {
        $arr=array(0=>'Inactive',1=>'Active');
        return $arr;
    }
    public function getNameTeacher($key)
    {
        $teacher=Teacher::findOne($key);
        if(isset($teacher))
        {
            return $teacher->ho_ten;
        }
        else
            return "Unknown";
    }
}
