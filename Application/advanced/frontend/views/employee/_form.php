<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Manager;
use common\models\Regular;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hired_date')->textInput() ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'manager_id')->dropDownList(
		ArrayHelper::map( Manager::find()->all(), 'id', 'username' ),
		[
			'prompt'=>'Select Manager',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
			//( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <?= $form->field($model, 'regular_id')->dropDownList(
		ArrayHelper::map( Regular::find()->all(), 'id', 'status' ),
		[
			'prompt'=>'Select Regular',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" + $(this).val(), function
			//	( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
