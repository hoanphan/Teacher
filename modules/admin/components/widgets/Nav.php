<?php

namespace app\modules\admin\components\widgets;
use yii\bootstrap\Widget;

class Nav extends Widget
{
    public function run()
    {
        return $this->render('nav');
    }
}