<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Cafedetail */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 
    $arrayDay  = [['day'=>'อาทิตย์','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'จันทร์','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'อังคาร','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'พุธ','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'พฤหัสบดี','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'ศุกร์','startTime'=>'00:00','endTime'=>'00:00'],
                    ['day'=>'เสาร์','startTime'=>'00:00','endTime'=>'00:00'],
                    ]?>
<div class="cafedetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cafeName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cafeDetail')->textarea(['rows' => 6]) ?>

    
    <?php foreach ($arrayDay as $key => $value) :?>
    <div class="col-md-12"><label><?=$value['day']?></label><br>
        <div class="well col-md-12">
        <div class="col-md-6">
        <label>เวลาเปิด</label>
         <?php
                echo TimePicker::widget([
            'name' => 'starttime', 
            'value' => $value['startTime'],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian'=>false 
                 ],
                 'addonOptions' => [
                    'asButton' => true,
                    'buttonOptions' => ['class' => 'btn btn-info']
                    ],
                    'options'=>['class'=>'timer']
            ]);
         ?>
         </div>
         <div class="col-md-6">
         <label>เวลาปิด</label>  
          <?php
                echo TimePicker::widget([
            'name' => 'endtime', 
            'value' => $value['endTime'],
            'pluginOptions' => [
                'showSeconds' => false,
                'showMeridian'=>false
            ],
             'addonOptions' => [
                    'asButton' => true,
                    'buttonOptions' => ['class' => 'btn btn-danger']
                    ],
                    'options'=>['class'=>'timer']
        ]);
         ?>
         </div>  
         </div>
         </div>
    <?php endforeach;?>
    <?= $form->field($model, 'cafeTime')->textarea(['rows' => 2,'id'=>'cafetime','readonly'=>'readonly']) ?>
    <?= $form->field($model, 'cafeComment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
