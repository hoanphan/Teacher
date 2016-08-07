<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BangIi */

$this->title = 'Thực hành, thực tập sư phạm, TTTN' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bang Iis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bang-ii-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
