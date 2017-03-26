<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ordercommand */

$this->title = 'Create Ordercommand';
$this->params['breadcrumbs'][] = ['label' => 'Ordercommands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordercommand-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'cafearray'=>$cafearray
    ]) ?>

</div>
