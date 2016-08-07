<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modelSeach\BacTccnSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bac-tccn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_gv') ?>

    <?= $form->field($model, 'id_lop') ?>

    <?= $form->field($model, 'id_mon_hoc') ?>

    <?= $form->field($model, 'hoc_ki') ?>

    <?php // echo $form->field($model, 'so_dvht') ?>

    <?php // echo $form->field($model, 'so_tiet_giang_day') ?>

    <?php // echo $form->field($model, 'so_tiet') ?>

    <?php // echo $form->field($model, 'he_so_lop_dong') ?>

    <?php // echo $form->field($model, 'Qc_de_nghi') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
