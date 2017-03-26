<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cafedetail */

$this->title = $model->cafeId;
$this->params['breadcrumbs'][] = ['label' => 'Cafedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cafedetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cafeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cafeId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cafeId',
            'cafeName',
            'cafeDetail:ntext',
            'cafeTime:ntext',
            'cafeComment:ntext',
        ],
    ]) ?>

</div>
