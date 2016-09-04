<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\TenDinhMucSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ten Dinh Mucs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ten-dinh-muc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ten Dinh Muc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ten_loai_dinh_muc',
            'bang_duoc_dinh_muc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>