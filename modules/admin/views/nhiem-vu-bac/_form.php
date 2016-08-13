<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\MonHoc;
use app\models\Lop;
use app\models\NhiemVuBac;
use app\models\Bac;
/* @var $this yii\web\View */
/* @var $model app\models\NhiemVuBac */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhiem-vu-bac-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gv')->dropDownList(ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten')) ?>

    <?= $form->field($model, 'id_lop')->dropDownList(ArrayHelper::map(Lop::find()->where(['status'=>1])->asArray()->all(),'id_lop','ten_lop')) ?>

    <?= $form->field($model, 'id_mon_hoc')->dropDownList(ArrayHelper::map(MonHoc::find()->where(['status'=>1])->asArray()->all(),'id_mon','te_mon')) ?>

    <?= $form->field($model, 'hoc_ki')->dropDownList(NhiemVuBac::LayDanhSachHocKi()) ?>

    <?= $form->field($model, 'so_dvht')->textInput() ?>

    <?= $form->field($model, 'so_tiet_giang_day')->textInput() ?>

    <?= $form->field($model, 'so_tiet_thuc_hanh')->textInput() ?>

    <?= $form->field($model, 'so_tiet_li_thuyet')->textInput() ?>

    <?= $form->field($model, 'so_tiet_TH_ngoai_lop_hoc')->textInput() ?>

    <?= $form->field($model, 'id_bac')->dropDownList(ArrayHelper::map(Bac::find()->asArray()->all(),'id','ten')) ?>

    <?= $form->field($model, 'status')->dropDownList(NhiemVuBac::LayDanhSachTrangThai()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
