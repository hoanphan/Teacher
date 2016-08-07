<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\PhongKhoa;

/* @var $this yii\web\View */
/* @var $model app\models\To_Bo_Mon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="to--bo--mon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_khoa')->dropDownList(ArrayHelper::map(PhongKhoa::find()->asArray()->all(),'id_khoa','ten')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
