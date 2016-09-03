<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Walkin;
use common\models\Customer;
use common\models\BillingStatement;

/* @var $this yii\web\View */
/* @var $model common\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map( Employee::find()->all(), 'id', 'name' ),
        [
            'prompt'=>'Select Employee',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
            //  ( data ){
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>

    <?= $form->field($model, 'walkin_id')->dropDownList(
        ArrayHelper::map( Walkin::find()->all(), 'id', 'actual_time_reserve' ),
        [
            'prompt'=>'Select Walkin',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
            //  ( data ){
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(
        ArrayHelper::map( Customer::find()->all(), 'id', 'name' ),
        [
            'prompt'=>'Select Customer',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
            //  ( data ){
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>

    <?= $form->field($model, 'billingstatement_id')->dropDownList(
        ArrayHelper::map( BillingStatement::find()->all(), 'id', 'mode_of_payment' ),
        [
            'prompt'=>'Select BillingStatement',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
            //  ( data ){
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
