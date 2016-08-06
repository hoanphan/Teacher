<?php
namespace app\modules\admin\components;
class Crumbread extends BaseWidget
{
    public function run()
    {
        return $this->render('crumbread');
    }
}