<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Teacher;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BangxSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách Kiêm nhiệm, số giờ được giảm theo chế độ (GVCN, giáo vụ khoa, Đoàn, Công đoàn, nghỉ Ths…)	';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangx-index">

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
            [
                'attribute'=>'id_gv',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data){
                    return $data->getNameTeacher($data->id_gv);
                }
            ],
            'noi_dung_giam:ntext',
            'thoi_gian_thuc_hien',
            'so_gio_giam',
             [
                 'attribute'=>'status',
                 'filter'=>array(1=>'Active',0=>'InActive'),
                 'value'=>function($data)
                 {
                     return $data->getStatusText($data->status);
                 }
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
