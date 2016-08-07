<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ngach */

$this->title = 'Cập nhật: ' . $model->id_ngach;
$this->params['breadcrumbs'][] = ['label' => 'Ngaches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ngach, 'url' => ['view', 'id' => $model->id_ngach]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ngach-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
