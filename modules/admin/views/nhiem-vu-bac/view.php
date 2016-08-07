<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NhiemVuBac */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nhiem Vu Bacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhiem-vu-bac-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_gv',
            'id_lop',
            'id_mon_hoc',
            'hoc_ki',
            'so_dvht',
            'so_tiet_giang_day',
            'so_tiet_thuc_hanh',
            'so_tiet_li_thuyet',
            'so_tiet_TH_ngoai_lop_hoc',
            'id_bac',
            'status',
        ],
    ]) ?>

</div>
