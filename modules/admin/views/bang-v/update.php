<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BangV */

$this->title = 'Cập nhật sinh hoạt chuyên môn,hội họp... ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bang Vs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bang-v-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
