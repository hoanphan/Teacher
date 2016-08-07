<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MonHoc */

$this->title = 'Tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Mon Hocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mon-hoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
