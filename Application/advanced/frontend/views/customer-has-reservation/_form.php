<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerHasReservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-has-reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_of_arrival')->textInput() ?>

    <?= $form->field($model, 'date_of_departure')->textInput() ?>

    <?= $form->field($model, 'desired_room_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requests')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reservation_id')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
