<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\TenDinhMucSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách tên định mức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ten-dinh-muc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới tên định mức', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ten_loai_dinh_muc',
            [
                'attribute'=>'bang_duoc_dinh_muc',
                'filter'=>[1=>'Bảng I',2=>'Bảng II',3=>'Bảng III',4=>'Bảng IV',5=>'Bảng V'],
                'value'=>function($data)
                {
                    return $data->getTextNorm($data->bang_duoc_dinh_muc);
                }

            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
