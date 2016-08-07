<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ngach */

$this->title = 'Tọa mới ngạch';
$this->params['breadcrumbs'][] = ['label' => 'Ngaches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngach-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
