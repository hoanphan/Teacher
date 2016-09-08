<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\modelSeach\UserSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode('Danh sách người sử dụng') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'fistname',
            'lastname',
            'username',
            'password',
            [
                'attribute'=>'authkey',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->asArray()->all(),'id_gv','ho_ten')
                ,'value'=>function($data) {
                    return $data->getTextGv($data->authkey);
            }
            ],
            [
                'attribute'=> 'rule',
                'filter'=>[0=>'admin',1=>'read'],
                'value'=>function($data){
                    return $data->getTextRule($data->rule);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
