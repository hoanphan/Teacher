<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout='main';
    public  $defaultRoute='default/index';
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
