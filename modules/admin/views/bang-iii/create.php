<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BangIii */

$this->title = 'Tạo mới nhiệm vụ nghiên cứu khoa học đã hoàn thành (hoặc sản phẩm thay thế đề tài NCKH)';
$this->params['breadcrumbs'][] = ['label' => 'Bang Iiis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-iii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
