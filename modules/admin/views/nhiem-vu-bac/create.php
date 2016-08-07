<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NhiemVuBac */

$this->title = 'Tạo mới nhiệm vụ';
$this->params['breadcrumbs'][] = ['label' => 'Nhiem Vu Bacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhiem-vu-bac-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
