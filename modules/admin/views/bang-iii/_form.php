<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\BangIii;

/* @var $this yii\web\View */
/* @var $model app\models\BangIii */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bang-iii-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gv')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>

    <?= $form->field($model, 'ten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nhiem_thu')->textInput() ?>

    <?= $form->field($model, 'so_gio_chuan')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(BangIii::getListStatus()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
