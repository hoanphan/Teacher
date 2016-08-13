<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BangV */

$this->title = 'Tạo mới sinh hoạt chuyên môn,hội họp...';
$this->params['breadcrumbs'][] = ['label' => 'Bang Vs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-v-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
