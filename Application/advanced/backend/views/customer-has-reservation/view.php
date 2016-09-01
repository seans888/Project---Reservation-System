<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerHasReservation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Has Reservations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-has-reservation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_of_arrival',
            'date_of_departure',
            'desired_room_type',
            'requests',
            'reservation_id',
            'customer_id',
        ],
    ]) ?>

</div>
