<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Lop;

/* @var $this yii\web\View */
/* @var $model app\models\Lop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_lop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'si_so')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(Lop::getArrStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
