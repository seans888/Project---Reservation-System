<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReservationHasRoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservation Has Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-has-room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reservation Has Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reservation_start_date',
            'reservation_end_date',
            'reservation_id',
            'room_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
