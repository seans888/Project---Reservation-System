<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\EmployeeAssistCustomer */

$this->title = 'Create Employee Assist Customer';
$this->params['breadcrumbs'][] = ['label' => 'Employee Assist Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-assist-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
