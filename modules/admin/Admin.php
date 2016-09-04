<?php

namespace app\modules\admin;

use app\models\User;


/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout='main';
    public  $defaultRoute='default/login';
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        \Yii::$app->setComponents([
            'user' => [
                'class' =>\yii\web\User::className(),
                'identityClass' => 'app\models\User',
                'enableAutoLogin' => true,
                'loginUrl' => ['admin/default/login'],
            ]
        ]);
    }
}
