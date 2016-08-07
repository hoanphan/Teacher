<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lop */

$this->title = 'Tọa mới';
$this->params['breadcrumbs'][] = ['label' => 'Lops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
