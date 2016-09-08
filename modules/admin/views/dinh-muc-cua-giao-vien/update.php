<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DinhMucCuaGiaoVien */

$this->title = 'Update Dinh Muc Cua Giao Vien: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dinh Muc Cua Giao Viens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dinh-muc-cua-giao-vien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
