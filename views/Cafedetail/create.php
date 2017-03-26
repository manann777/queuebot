<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cafedetail */

$this->title = 'Create Cafedetail';
$this->params['breadcrumbs'][] = ['label' => 'Cafedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafedetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
