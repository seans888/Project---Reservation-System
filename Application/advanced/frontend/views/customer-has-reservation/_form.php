<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Reservation;
use common\models\Customer;

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

    <?= $form->field($model, 'reservation_id')->dropDownList(
        ArrayHelper::map( Reservation::find()->all(), 'id', 'reservation_date' ),
        [
            'prompt'=>'Reservation Date',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>  

    <?= $form->field($model, 'customer_id')->dropDownList(
        ArrayHelper::map( Customer::find()->all(), 'id', 'last_name' ),
        [
            'prompt'=>'Select Customer',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
