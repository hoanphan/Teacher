<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
use app\models\Teacher;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BangVSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Danh sách sinh hoạt chuyên môn,hội họp...';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-v-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => \app\models\User::isFilter($searchModel),
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id_gv',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data){
                    return $data->getNameTeacher($data->id_gv);
                }
            ],
            'noi_dung:ntext',
            'so_gio_chuan',
            'thoi_gian_thuc_hien:ntext',
            [
                'attribute'=>'status',
                'filter'=>array(0=>'Inactive',1=>'Active'),
                'value'=>function($data){
                    return $data->getStatusText($data->status);
                }
            ],

            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
