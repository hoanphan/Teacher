<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ngach".
 *
 * @property integer $id_ngach
 * @property integer $ten_ngach
 * @property double $quy_chuan
 */
class Ngach extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ngach';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten_ngach', 'quy_chuan'], 'required'],
            [['ten_ngach'], 'string','max'=>255],
            [['quy_chuan'], 'number'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ngach' => Yii::t('app','serial'),
            'ten_ngach' => Yii::t('app','name'),
            'quy_chuan' => Yii::t('app','standard'),
        ];
    }
}
