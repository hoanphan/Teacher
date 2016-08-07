<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\LopSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách lớp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lop',
            'ten_lop',
            'si_so',

            [
                'attribute'=>'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'value'=>function($data){
                    return $data->getStatusText($data->status);
                }
            ]
            ,

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
