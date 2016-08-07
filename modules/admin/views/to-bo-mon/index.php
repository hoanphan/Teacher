<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\PhongKhoa;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\ToBoMonSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách tổ bộ môn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to--bo--mon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_to_bo_mon',
            'ten',
            [
                'attribute'=>'id_khoa',
                'filter'=>ArrayHelper::map(PhongKhoa::find()->asArray()->all(),'id_khoa','ten'),
                'value'=>function($data){return $data->getTextPhong($data->id_khoa);}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
