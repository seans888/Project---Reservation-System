<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ReservationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_reserved') ?>

    <?= $form->field($model, 'number_of_days') ?>

    <?= $form->field($model, 'down_payment') ?>

    <?= $form->field($model, 'receipt_number') ?>

    <?php // echo $form->field($model, 'online_id') ?>

    <?php // echo $form->field($model, 'walk-in_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
