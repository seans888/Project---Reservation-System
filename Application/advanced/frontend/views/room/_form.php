<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Standard' => 'Standard', 'Deluxe' => 'Deluxe', 'Special' => 'Special', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacity')->dropDownList([ 2 => '2', 4 => '4', 8 => '8', 10 => '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'availability')->dropDownList([ 'Available' => 'Available', 'Not Available' => 'Not Available', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'billingstatement_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
