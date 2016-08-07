<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BangIi */

$this->title = 'Thực hành, thực tập sư phạm, TTTN';
$this->params['breadcrumbs'][] = ['label' => 'Bang Iis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bang-ii-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
