<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ordercommand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordercommand-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderMenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderPrice')->textInput() ?>

    <?= $form->field($model, 'orderCommand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cafeId')->dropDownList($cafearray,['prompt'=>'เลือกร้าน...']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
