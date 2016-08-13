<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\modules\admin\assets\AppAsset;
use  app\modules\admin\components\widgets\Nav;
use app\modules\admin\components\widgets\SideBar;
use  yii\helpers\Url;
use app\modules\admin\components\BaseWidget;
$bunel = AppAsset::register($this);
?>
<div class="navbar-header pull-left">
    <a href="<?=Url::toRoute(['default/index'])?>" class="navbar-brand">
        <small>
            <i class="fa fa-leaf"></i>
                Teacher Management
        </small>
    </a>
</div>

<div class="navbar-buttons navbar-header pull-right" role="navigation">
    <ul class="nav ace-nav">


        <li class="light-blue">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="<?php echo $bunel->baseUrl?>/avatars/user.jpg" alt="Jason's Photo" />
                <span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

                <i class="ace-icon fa fa-caret-down"></i>
            </a>

            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                    <a href="#">
                        <i class="ace-icon fa fa-cog"></i>
                        Thiết lập
                    </a>
                </li>


                <li class="divider"></li>

                <li>
                    <a href="#">
                        <i class="ace-icon fa fa-power-off"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>