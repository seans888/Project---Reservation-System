<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\BillingStatement;

/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacity')->textInput() ?>

    <?= $form->field($model, 'availability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billingStatement_id')->dropDownList(
        ArrayHelper::map( BillingStatement::find()->all(), 'id', 'mode_of_payment' ),
        [
            'prompt'=>'Select Mode of Payment',
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
