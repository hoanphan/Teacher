<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\MonHoc;

/* @var $this yii\web\View */
/* @var $model app\models\MonHoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mon-hoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'te_mon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(MonHoc::getListStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
