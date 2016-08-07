<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\PhongKhoa;
use app\models\To_Bo_Mon;
use app\models\Ngach;
use app\modules\admin\assets\AppAsset;
/* @var $this yii\web\View */
/* @var $model app\models\teacher */
/* @var $form yii\widgets\ActiveForm */
$bunel = AppAsset::register($this);
?>
<script src="<?=$bunel->baseUrl?>/js/jquery.2.1.1.min.js"></script>
<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ho_ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_Khoa')->dropDownList(ArrayHelper::map(PhongKhoa::find()->asArray()->all(),'id_khoa','ten')) ?>
    <?= $form->field($model, 'id_to_bo_mon')->dropDownList(ArrayHelper::map(To_Bo_Mon::find()->asArray()->all(),'id_to_bo_mon','ten')) ?>

    <?= $form->field($model, 'dinh_muc')->textInput() ?>

    <?= $form->field($model, 'he_so_luong')->textInput() ?>

    <?= $form->field($model, 'id_ngach')->dropDownList(ArrayHelper::map(Ngach::find()->asArray()->all(),'id_ngach','ten_ngach')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <script>
        $(document).ready(function () {
            $('#teacher-id_khoa').change(function () {
                var value=$(this).val();
              var toBoMon= $('#teacher-id_to_bo_mon');
                toBoMon.find('option').each(function () {
                    $(this).remove();
                });
                $.ajax(
                    {
                        'url':'ajax',
                        'cache':false,
                        'type':'post',
                        'data':{
                            id:value
                        },
                        success:function (resutl) {
                           toBoMon.append(resutl);
                        }
                    }
                )
            })
        })
    </script>
</div>
