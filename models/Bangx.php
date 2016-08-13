<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bangx".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property string $noi_dung_giam
 * @property string $thoi_gian_thuc_hien
 * @property double $so_gio_giam
 * @property integer $status
 */
class Bangx extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bangx';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'noi_dung_giam', 'thoi_gian_thuc_hien', 'so_gio_giam'], 'required'],
            [['id_gv', 'status'], 'integer'],
            [['noi_dung_giam'], 'string'],
            [['so_gio_giam'], 'number'],
            [['thoi_gian_thuc_hien'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'id_gv' => 'Tên Giảng viên',
            'noi_dung_giam' => 'Nội dung được giảm',
            'thoi_gian_thuc_hien' => 'Thời gian thực hiện',
            'so_gio_giam' => 'Số giờ giảm',
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
