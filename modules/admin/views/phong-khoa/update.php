<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhongKhoa */

$this->title = 'Cập nhật phòng ban:' . $model->id_khoa;
$this->params['breadcrumbs'][] = ['label' => 'Phong Khoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_khoa, 'url' => ['view', 'id' => $model->id_khoa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phong-khoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
