<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TenDinhMuc */

$this->title = 'Cập nhật tên định mức: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ten Dinh Mucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ten-dinh-muc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
