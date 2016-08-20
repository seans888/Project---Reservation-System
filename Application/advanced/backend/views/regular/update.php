<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Regular */

$this->title = 'Update Regular: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Regulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regular-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
