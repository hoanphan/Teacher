<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TenDinhMuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ten-dinh-muc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_loai_dinh_muc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bang_duoc_dinh_muc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
