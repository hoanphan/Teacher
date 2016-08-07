<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ngach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ngach-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_ngach')->textInput() ?>

    <?= $form->field($model, 'quy_chuan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
