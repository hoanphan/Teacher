<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bangx */

$this->title = 'Thêm mói kiêm nhiệm, số giờ được giảm theo chế độ (GVCN, giáo vụ khoa, Đoàn, Công đoàn, nghỉ Ths…)';
$this->params['breadcrumbs'][] = ['label' => 'Bangxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
