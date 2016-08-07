<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bang_ii".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property string $noi_dung
 * @property string $thoi_gian_th
 * @property integer $status
 * @property integer $so_gio_chuan
 */
class BangIi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bang_ii';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'noi_dung', 'thoi_gian_th', 'so_gio_chuan'], 'required'],
            [['id_gv', 'status', 'so_gio_chuan'], 'integer'],
            [['noi_dung'], 'string'],
            [['thoi_gian_th'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'id_gv' => 'Nhân viên thực hiện',
            'noi_dung' => 'Nội dung',
            'thoi_gian_th' => 'Thời gian thục hiện',
            'status' => 'Trạng thái',
            'so_gio_chuan' => 'Số giờ chuẩn',
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
}
