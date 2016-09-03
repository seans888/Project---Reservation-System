<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Billingstatement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billingstatement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mode_of_payment')->dropDownList([ 'Cash' => 'Cash', 'Cheque' => 'Cheque', 'Credit Card' => 'Credit Card', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_payment')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Fully Paid' => 'Fully Paid', 'Partially Paid' => 'Partially Paid', 'Unpaid' => 'Unpaid', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
