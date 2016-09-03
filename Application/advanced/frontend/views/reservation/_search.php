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

    <?= $form->field($model, 'reservation_date') ?>

    <?= $form->field($model, 'check_in') ?>

    <?= $form->field($model, 'check_out') ?>

    <?= $form->field($model, 'type_of_room') ?>

    <?php // echo $form->field($model, 'number_of_adults') ?>

    <?php // echo $form->field($model, 'number_of_kids') ?>

    <?php // echo $form->field($model, 'billingstatement_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
