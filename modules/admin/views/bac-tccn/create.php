<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BacTccn */

$this->title = 'Tạo mới dạy văn hóa bậc TCCN';
$this->params['breadcrumbs'][] = ['label' => 'Bac Tccns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bac-tccn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
