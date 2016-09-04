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
            [['id', 'id_teacher', 'name_norms', 'number'], 'required'],
            [['id', 'id_teacher', 'number'], 'integer'],
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
            'id_teacher' => 'Id Teacher',
            'name_norms' => 'Name Norms',
            'number' => 'Number',
        ];
    }
}
