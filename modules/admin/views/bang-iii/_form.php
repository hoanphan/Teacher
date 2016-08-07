<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;

/* @var $this yii\web\View */
/* @var $model app\models\BangIii */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bang-iii-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gv')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>

    <?= $form->field($model, 'ten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nhiem_thu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'so_gio_chuan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
