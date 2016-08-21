<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Customer;

/* @var $this yii\web\View */
/* @var $model common\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_offered')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_of_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
		ArrayHelper::map( Employee::find()->all(), 'id', 'name' ),
		[
			'prompt'=>'Select Employee',
			//'onchange'=>
		    //	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>	

    <?= $form->field($model, 'customer_id')->dropDownList(
		ArrayHelper::map( Customer::find()->all(), 'id', 'name' ),
		[
			'prompt'=>'Select Customer',
			//'onchange'=>
		    //	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function( data ) {
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
