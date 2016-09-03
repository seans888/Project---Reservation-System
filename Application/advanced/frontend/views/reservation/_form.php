<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reservation_date')->textInput() ?>

    <?= $form->field($model, 'check_in')->textInput() ?>

    <?= $form->field($model, 'check_out')->textInput() ?>

    <?= $form->field($model, 'type_of_room')->dropDownList([ 'Standard' => 'Standard', 'Deluxe' => 'Deluxe', 'Special' => 'Special', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'number_of_adults')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'number_of_kids')->dropDownList([ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'billingstatement_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
