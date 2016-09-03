<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Reservation;
use common\models\Room;

/* @var $this yii\web\View */
/* @var $model common\models\ReservationHasRoom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-has-room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reservation_start_date')->textInput() ?>

    <?= $form->field($model, 'reservation_end_date')->textInput() ?>

    <?= $form->field($model, 'reservation_id')->dropDownList(
        ArrayHelper::map( Reservation::find()->all(), 'id', 'reservation_date' ),
        [
            'prompt'=>'Select Reservation Date',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?> 

    <?= $form->field($model, 'room_id')->dropDownList(
        ArrayHelper::map( Room::find()->all(), 'id', 'type' ),
        [
            'prompt'=>'Select Room Type',
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
