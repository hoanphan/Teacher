<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NhiemVuBac */

$this->title = 'Cập nhật nhiệm vụ: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nhiem Vu Bacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhiem-vu-bac-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
