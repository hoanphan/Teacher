<?php
namespace app\modules\admin\components;
class TopNavigation extends BaseWidget
{
    public function run()
    {
        return $this->render('topNavigation');
    }
}