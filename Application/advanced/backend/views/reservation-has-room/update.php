<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ReservationHasRoom */

$this->title = 'Update Reservation Has Room: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reservation Has Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservation-has-room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
