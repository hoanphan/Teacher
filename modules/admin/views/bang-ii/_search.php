<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modelSeach\BangIiSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bang-ii-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_gv') ?>

    <?= $form->field($model, 'noi_dung') ?>

    <?= $form->field($model, 'thoi_gian_th') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'so_gio_chuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
