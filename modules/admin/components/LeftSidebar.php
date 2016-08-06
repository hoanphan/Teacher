<?php
namespace app\modules\admin\components;
class LeftSideBar extends BaseWidget
{
    public function run()
    {
        return $this->render('leftSidebar');
    }
}