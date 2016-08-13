<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\Lop;
use app\models\MonHoc;
use app\models\NhiemVuBac;

/* @var $this yii\web\View */
/* @var $model app\models\BacTccn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bac-tccn-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_gv')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>
    <?= $form->field($model, 'id_lop')->dropDownList(ArrayHelper::map(Lop::find()->where(['status'=>1])->asArray()->all(),'id_lop','ten_lop')) ?>

    <?= $form->field($model, 'id_mon_hoc')->dropDownList(ArrayHelper::map(MonHoc::find()->where(['status'=>1])->asArray()->all(),'id_mon','te_mon')) ?>

    <?= $form->field($model, 'hoc_ki')->dropDownList(NhiemVuBac::LayDanhSachHocKi()) ?>

    <?= $form->field($model, 'so_dvht')->textInput() ?>

    <?= $form->field($model, 'so_tiet_giang_day')->textInput() ?>


    <?= $form->field($model, 'he_so_lop_dong')->textInput() ?>


    <?= $form->field($model, 'status')->dropDownList(NhiemVuBac::LayDanhSachTrangThai()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
