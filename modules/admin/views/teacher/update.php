<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\teacher */

$this->title = 'Cập nhật nhân viên: ' . $model->id_gv;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gv, 'url' => ['view', 'id' => $model->id_gv]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
