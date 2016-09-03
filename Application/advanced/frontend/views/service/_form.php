<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Customer;
use common\models\BillingStatement;
use common\models\Room;


/* @var $this yii\web\View */
/* @var $model common\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'service_availed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map( Employee::find()->all(), 'id', 'last_name' ),
        [
            'prompt'=>'Select Employee',
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

    <?= $form->field($model, 'billingStatement_id')->dropDownList(
        ArrayHelper::map( BillingStatement::find()->all(), 'id', 'mode_of_payment' ),
        [
            'prompt'=>'Select Mode of Payment',
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
