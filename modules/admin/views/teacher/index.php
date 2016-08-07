<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\To_Bo_Mon;
use app\models\PhongKhoa;
use app\models\Ngach;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\TeacherSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách nhân viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

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

            'ho_ten',
            [
                'attribute'=>'id_Khoa',
                'filter'=>ArrayHelper::map(PhongKhoa::find()->asArray()->all(),'id_khoa','ten'),
                'value'=>function($data){ return $data->LayPhongBan($data->id_Khoa);}
            ],
            [
                'attribute'=>'id_to_bo_mon',
                'filter'=>ArrayHelper::map(To_Bo_Mon::find()->asArray()->all(),'id_to_bo_mon','ten'),
                'value'=>function($data){ return $data->LayTenTo($data->id_to_bo_mon);}
            ],

            'dinh_muc',
            'he_so_luong',
             [
                 'attribute'=>'id_ngach',
                 'filter'=>ArrayHelper::map(Ngach::find()->asArray()->all(),'id_ngach','ten_ngach'),
                 'value'=>function($data){ return $data->TenNgach($data->id_ngach);}
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
