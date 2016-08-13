<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BangV */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bang Vs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-v-view">

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
            'noi_dung:ntext',
            'thoi_gian_thuc_hien:ntext',
            'so_gio_chuan',
            'status',
        ],
    ]) ?>

</div>
