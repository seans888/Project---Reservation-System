<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Online */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="online-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actual_access_date')->textInput() ?>

    <?= $form->field($model, 'actual_reserve_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
