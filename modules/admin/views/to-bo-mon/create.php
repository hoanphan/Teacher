<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\To_Bo_Mon */

$this->title = 'Thêm mới tổ bộ môn';
$this->params['breadcrumbs'][] = ['label' => 'To  Bo  Mons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to--bo--mon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
