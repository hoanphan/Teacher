<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use  app\models\Teacher;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BangIiSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thực hành, thực tập sư phạm, TTTN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-ii-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bang Ii', ['create'], ['class' => 'btn btn-success']) ?>
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
            'noi_dung:ntext',
            'thoi_gian_th',
            [
                'attribute'=>'status',
                'filter'=>[1=>'Active',0=>'Inactive'],
                /*'value'=>function($data)
                {
                    return $data->getStatusText($data->status);
                }*/
            ],

             'so_gio_chuan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
