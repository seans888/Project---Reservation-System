<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Walkin;
use common\models\Online;

/* @var $this yii\web\View */
/* @var $model common\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_reserved')->textInput() ?>

    <?= $form->field($model, 'number_of_days')->textInput() ?>

    <?= $form->field($model, 'down_payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'online_id')->dropDownList(
		ArrayHelper::map( Online::find()->all(), 'id', 'actual_reserve_date' ),
		[
			'prompt'=>'Select Online',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
			//	( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <?= $form->field($model, 'walkin_id')->dropDownList(
		ArrayHelper::map( Walkin::find()->all(), 'id', 'actual_time_reserve' ),
		[
			'prompt'=>'Select Walkin',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
			//	( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
