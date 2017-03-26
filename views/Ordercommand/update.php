<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordercommand */

$this->title = 'Update Ordercommand: ' . $model->orderId;
$this->params['breadcrumbs'][] = ['label' => 'Ordercommands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->orderId, 'url' => ['view', 'id' => $model->orderId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordercommand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
