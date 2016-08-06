<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bac".
 *
 * @property integer $id
 * @property integer $ten
 * @property integer $status
 */
class Bac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten'], 'required'],
            [['ten', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'status' => 'Status',
        ];
    }
}
