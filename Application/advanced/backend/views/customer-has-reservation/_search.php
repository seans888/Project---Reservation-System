<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerHasReservationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-has-reservation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_of_arrival') ?>

    <?= $form->field($model, 'date_of_departure') ?>

    <?= $form->field($model, 'desired_room_type') ?>

    <?= $form->field($model, 'requests') ?>

    <?php // echo $form->field($model, 'reservation_id') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
