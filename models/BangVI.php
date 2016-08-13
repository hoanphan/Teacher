<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bang_vi".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property string $noi_dung
 * @property string $thoi_gian_thuc_hien
 * @property integer $so_gio_chuan
 * @property integer $status
 */
class BangVI extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bang_vi';
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
            'id' => 'ID',
            'id_gv' => 'Id Gv',
            'noi_dung' => 'Noi Dung',
            'thoi_gian_thuc_hien' => 'Thoi Gian Thuc Hien',
            'so_gio_chuan' => 'So Gio Chuan',
            'status' => 'Status',
        ];
    }
}
