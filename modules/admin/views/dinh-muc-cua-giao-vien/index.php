<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\User;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\DinhMucCuaGiaoVienSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách định mức của giáo viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dinh-muc-cua-giao-vien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  if(User::isAdmin()):?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id_teacher',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data)
                {
                    return $data->getNameTeacher($data->id_teacher);
                }
            ],
            [
                'attribute'=> 'name_norms',
                'filter'=>ArrayHelper::map(\app\models\TenDinhMuc::find()->asArray()->all(),'id','ten_loai_dinh_muc'),
                'value'=>function($data)
                {
                    return $data->getNameNorm($data->name_norms);
                }
            ]
           ,
            'number',
            [
                'attribute'=> 'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'value'=>function($data)
                {
                    return $data->getTextStatus($data->id_teacher);
                }
            ]
            ,
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php else:?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id_teacher',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data)
                {
                    return $data->getNameTeacher($data->id_teacher);
                }
            ],
            [
                'attribute'=> 'name_norms',
                'filter'=>ArrayHelper::map(\app\models\TenDinhMuc::find()->asArray()->all(),'id','ten_loai_dinh_muc'),
                'value'=>function($data)
                {
                    return $data->getNameNorm($data->name_norms);
                }
            ]
            ,
            'number',
            [
                'attribute'=> 'status',
                'filter'=>[0=>'Inactive',1=>'Active'],
                'value'=>function($data)
                {
                    return $data->getTextStatus($data->id_teacher);
                }
            ]
            ,
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php endif;?>
</div>
