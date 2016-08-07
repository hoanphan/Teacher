<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bac */

$this->title = 'Thêm mới bặc';
$this->params['breadcrumbs'][] = ['label' => 'Bacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bac-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
