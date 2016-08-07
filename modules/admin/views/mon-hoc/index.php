<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\MonHocSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách môn học';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mon-hoc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mon',
            'te_mon',
            [
                'attribute'=>'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'value'=>function($data){
                    return $data->getStatusText($data->status);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
