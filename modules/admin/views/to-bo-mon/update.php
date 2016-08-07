<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\To_Bo_Mon */

$this->title = 'Cập nhật tổ bộ môn: ' . $model->id_to_bo_mon;
$this->params['breadcrumbs'][] = ['label' => 'To  Bo  Mons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_to_bo_mon, 'url' => ['view', 'id' => $model->id_to_bo_mon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="to--bo--mon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
