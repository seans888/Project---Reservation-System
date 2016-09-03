<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Customer;

/* @var $this yii\web\View */
/* @var $model common\models\EmployeeAssistCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-assist-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(
        ArrayHelper::map( Customer::find()->all(), 'id', 'last_name' ),
        [
            'prompt'=>'Select Customer',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>  

    <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map( Employee::find()->all(), 'id', 'last_name' ),
        [
            'prompt'=>'Select Employee',
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
