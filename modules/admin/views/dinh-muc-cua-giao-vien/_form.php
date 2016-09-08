<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\TenDinhMuc;
/* @var $this yii\web\View */
/* @var $model app\models\DinhMucCuaGiaoVien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dinh-muc-cua-giao-vien-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if(\app\models\User::isAdmin()):?>
    <?= $form->field($model, 'id_teacher')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>
    <?php else:?>
        <div style="display: none">
            <?= $form->field($model, 'id_teacher')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>

        </div>
    <?php endif;?>
    <?= $form->field($model, 'name_norms')->dropDownList(ArrayHelper::map(TenDinhMuc::find()->asArray()->all(),'id','ten_loai_dinh_muc')) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([0=>'Inactive',1=>'Active']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
