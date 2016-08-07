<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lop */

$this->title = 'Cập nhật lại lớp: ' . $model->ten_lop;
$this->params['breadcrumbs'][] = ['label' => 'Lops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ten_lop, 'url' => ['view', 'id' => $model->ten_lop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
