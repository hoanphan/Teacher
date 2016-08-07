<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\Lop;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\NhiemVuBacSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách nhiệm vụ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhiem-vu-bac-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo thêm nhiệm vụ', ['create'], ['class' => 'btn btn-success']) ?>
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
                    return $data->getTenGv($data->id_gv);
                }

            ],
            [
                'attribute'=> 'id_lop',
                'filter'=>ArrayHelper::map(Lop::find()->asArray()->all(),'id_lop','ten_lop'),
                'value'=>function($data){
                    return $data->getTenLop($data->id_lop);
                }
            ],
            [
                'attribute'=> 'id_mon_hoc',
                'filter'=>ArrayHelper::map(\app\models\MonHoc::find()->asArray()->all(),'id_mon','te_mon'),
                'value'=>function($data){
                    return $data->getTenMonHoc($data->id_mon_hoc);
                }
            ],
            [
                'attribute'=> 'hoc_ki',
                'filter'=>['I'=>'Học kì I','II'=>'Học kì II','III'=>'Học kì III'],
                'value'=>function($data){
                return $data->getTenHocKi($data->hoc_ki);
                }
            ],
             'so_dvht',
             'so_tiet_giang_day',
             'so_tiet_thuc_hanh',
             'so_tiet_li_thuyet',
            'so_tiet_TH_ngoai_lop_hoc',
            [
                'attribute'=> 'id_bac',
                'filter'=>ArrayHelper::map(\app\models\Bac::find()->asArray()->all(),'id','ten'),
                'value'=>function($data){
                    return $data->getTenBac($data->id_bac);
                }
            ],
            [
                'attribute'=>'status',
                'filter'=>[1=>'Active',0=>'Inactive'],
                'value'=>function($data){
                    return $data->getTextStatus($data->status);
                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
