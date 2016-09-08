<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TenDinhMuc */

$this->title = 'Thêm mới tên định mức';
$this->params['breadcrumbs'][] = ['label' => 'Ten Dinh Mucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ten-dinh-muc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
