<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MonHoc */

$this->title = $model->id_mon;
$this->params['breadcrumbs'][] = ['label' => 'Mon Hocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mon-hoc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mon], [
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
            'id_mon',
            'te_mon',
            'status',
        ],
    ]) ?>

</div>
