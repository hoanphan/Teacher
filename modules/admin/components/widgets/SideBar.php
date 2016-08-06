<?php
 namespace app\modules\admin\components\widgets;
 use yii\base\Widget;

 class SideBar extends Widget
 {
     public function run()
     {
        return $this->render('sideBar');
     }
 }