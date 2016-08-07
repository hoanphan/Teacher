<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MonHoc */

$this->title = 'Cập nhật lại: ' . $model->id_mon;
$this->params['breadcrumbs'][] = ['label' => 'Mon Hocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mon, 'url' => ['view', 'id' => $model->id_mon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mon-hoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
