<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\modelSeach\TeacherSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_gv') ?>

    <?= $form->field($model, 'ho_ten') ?>

    <?= $form->field($model, 'id_to_bo_mon') ?>

    <?= $form->field($model, 'id_Khoa') ?>

    <?= $form->field($model, 'dinh_muc') ?>

    <?php // echo $form->field($model, 'he_so_luong') ?>

    <?php // echo $form->field($model, 'id_ngach') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
