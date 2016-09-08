<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\BangIii;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BangIiiSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhiệm vụ nghiên cứu khoa học đã hoàn thành (hoặc sản phẩm thay thế đề tài NCKH)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-iii-index">

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


            ['attribute'=>'id_gv',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data){
                    return $data->getNameTeacher($data->id_gv);
                }
            ],
            'ten:ntext',
            'nhiem_thu:ntext',
            'so_gio_chuan:ntext',
            [
                'attribute'=>'status',
                'filter'=>array(1=>'Active',0=>'Inactive'),
                'value'=>function($data)
                {
                    return $data->getStatusText($data->status);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
