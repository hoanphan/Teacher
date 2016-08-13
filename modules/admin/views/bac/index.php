<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BacSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách bậc đào tạo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bac-index">

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

            'ten',
           [
               'attribute'=>'status',
               'filter'=>[0=>'Inactive',1=>'Active'],
               'value'=>function($data){return $data->getStatusText($data->status);}
           ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
