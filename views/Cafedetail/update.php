<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cafedetail */

$this->title = 'Update Cafedetail: ' . $model->cafeId;
$this->params['breadcrumbs'][] = ['label' => 'Cafedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cafeId, 'url' => ['view', 'id' => $model->cafeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cafedetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
