<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordercommands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordercommand-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordercommand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orderId',
            'orderMenu',
            'orderPrice',
            'orderCommand',
            
           ['label'=>'ร้าน','attribute'=>'cafeId','value'=>function($model,$index){
            return $model->cafe->cafeName;

           }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
