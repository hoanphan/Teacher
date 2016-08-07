<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BangIii */

$this->title = 'Update Bang Iii: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bang Iiis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bang-iii-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
