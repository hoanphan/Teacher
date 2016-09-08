<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DinhMucCuaGiaoVien */

$this->title = 'Tạo mới Danh mục của giáo viên';
$this->params['breadcrumbs'][] = ['label' => 'Định mức của giáo viên', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dinh-muc-cua-giao-vien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
