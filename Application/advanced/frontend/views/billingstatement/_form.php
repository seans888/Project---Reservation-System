<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\modesl\Billingstatement;
use common\models\Customer;

/* @var $this yii\web\View */
/* @var $model common\models\Billingstatement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billingstatement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mode_of_payment')->dropDownList([ 'Cash' => 'Cash', 'Cheque' => 'Cheque', 'Credit Card' => 'Credit Card', ], ['prompt' => 'Select Mode of Payment']) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_payment')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Fully Paid' => 'Fully Paid', 'Partially Paid' => 'Partially Paid', 'Unpaid' => 'Unpaid', ], ['prompt' => 'Select Status']) ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'customer_id')->dropDownList(
        ArrayHelper::map( Customer::find()->all(), 'id', 'last_name' ),
        [
            'prompt'=>'Select Customer',
            //'onchange'=>
            //  '$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
            //  ( data ){
            //      $( "select#model-contact" ).html( data );
            //  });'
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
