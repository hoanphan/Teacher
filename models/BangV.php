<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bang_v".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property string $noi_dung
 * @property string $thoi_gian_thuc_hien
 * @property integer $so_gio_chuan
 * @property integer $status
 */
class BangV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bang_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'noi_dung', 'thoi_gian_thuc_hien', 'so_gio_chuan'], 'required'],
            [['id_gv', 'so_gio_chuan', 'status'], 'integer'],
            [['noi_dung', 'thoi_gian_thuc_hien'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'id_gv' => 'Tên giáo viên',
            'noi_dung' => 'Nội dung thực hiện',
            'thoi_gian_thuc_hien' => 'Thời gian thực hiện',

            'so_gio_chuan' => 'Số giờ chuẩn',
            'status' => 'Trạng thái',
        ];
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
    public function getStatusText($key){
        if($key==0)
        {
            return 'Inactive';
        }
        elseif ($key==1)
            return 'Active';
        else
            return 'Unknown';

    }
}
