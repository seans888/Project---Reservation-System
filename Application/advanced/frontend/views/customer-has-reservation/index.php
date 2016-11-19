<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CustomerHasReservationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Has Reservations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-has-reservation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Has Reservation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_of_arrival',
            'date_of_departure',
            'desired_room_type',
            'requests',
            // 'reservation_id',
            // 'customer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
