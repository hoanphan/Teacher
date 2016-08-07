<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\modules\admin\assets\AppAsset;
use  app\modules\admin\components\widgets\Nav;
use app\modules\admin\components\widgets\SideBar;

$bunel = AppAsset::register($this);
?>
<script src="<?=$bunel->baseUrl?>/js/jquery.2.1.1.min.js"></script>
