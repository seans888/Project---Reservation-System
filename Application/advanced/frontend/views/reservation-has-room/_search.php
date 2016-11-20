<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ReservationHasRoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-has-room-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reservation_start_date') ?>

    <?= $form->field($model, 'reservation_end_date') ?>

    <?= $form->field($model, 'reservation_id') ?>

    <?= $form->field($model, 'room_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
