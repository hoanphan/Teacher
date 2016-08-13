<?php
use yii\base\Widget;
class Nav extends Widget
{
    public function run()
    {
        return $this->render('breabcrumb');
    }
}