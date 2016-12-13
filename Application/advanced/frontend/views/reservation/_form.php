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

    <?= $form->field($model, 'rooms')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adults')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kids')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'billingstatement_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'create' : 'update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
