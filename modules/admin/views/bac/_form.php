<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Bac;

/* @var $this yii\web\View */
/* @var $model app\models\Bac */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bac-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(Bac::getListStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
