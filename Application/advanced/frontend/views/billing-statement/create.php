<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\billingstatement */

$this->title = 'Create Billingstatement';
$this->params['breadcrumbs'][] = ['label' => 'Billingstatements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billingstatement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
