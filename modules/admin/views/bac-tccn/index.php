<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Teacher;
use app\models\Lop;
use app\models\MonHoc;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\BacTccnSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách dạy văn hóa bậc TCCN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bac-tccn-index">

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
            [
                'attribute'=>'id_gv',
                'filter'=>ArrayHelper::map(Teacher::find()->asArray()->all(),'id_gv','ho_ten'),
                'value'=>function($data){
                    return $data->getTenGv($data->id_gv);
                }
            ],
            [
                'attribute'=>'id_lop',
                'filter'=>ArrayHelper::map(Lop::find()->asArray()->all(),'id_lop','ten_lop'),
                'value'=>function($data){
                    return $data->getTenLop($data->id_lop);
                }
            ],
            [
                'attribute'=>'id_mon_hoc',
                'filter'=>ArrayHelper::map(MonHoc::find()->asArray()->all(),'id_mon','te_mon'),
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
             'he_so_lop_dong',
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
