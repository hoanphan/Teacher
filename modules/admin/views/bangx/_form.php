<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;

/* @var $this yii\web\View */
/* @var $model app\models\Bangx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bangx-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gv')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>

    <?= $form->field($model, 'noi_dung_giam')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thoi_gian_thuc_hien')->textInput() ?>

    <?= $form->field($model, 'so_gio_giam')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(array(1=>'Active',0=>'Inactive')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
