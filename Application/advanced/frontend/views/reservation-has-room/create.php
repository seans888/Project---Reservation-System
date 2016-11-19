<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ReservationHasRoom */

$this->title = 'Create Reservation Has Room';
$this->params['breadcrumbs'][] = ['label' => 'Reservation Has Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-has-room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
