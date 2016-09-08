<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ten_dinh_muc".
 *
 * @property integer $id
 * @property string $ten_loai_dinh_muc
 * @property  integer $bang_duoc_dinh_muc
 */
class TenDinhMuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ten_dinh_muc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_loai_dinh_muc','bang_duoc_dinh_muc'], 'required'],
            [['ten_loai_dinh_muc'], 'string', 'max' => 255],
            [['bang_duoc_dinh_muc'], 'integer', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten_loai_dinh_muc' => 'Tên loại định mức',
            'bang_duoc_dinh_muc'=>'Bảng được định mức'
        ];
    }
    public function getTextNorm($value)
    {
        $arr=array(1=>'Bảng I',2=>'Bảng II',3=>'Bảng III',4=>'Bảng IV',5=>'Bảng V');

        if(isset($arr[$value]))
        {
            return $arr[$value];
        }
        else
            return 'Unknown';
    }
    public static function getIdFollowName($name)
    {
        return TenDinhMuc::findOne(['bang_duoc_dinh_muc'=>$name])->id;
    }

}
