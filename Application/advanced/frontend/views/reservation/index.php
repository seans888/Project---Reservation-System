<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReservationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*echo "<body style='background: url(https://justanushathings.files.wordpress.com/2016/02/true_blue_429683_i0.png?w=800&h=800&crop=1);'>";*/

$this->title = 'Reservations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-index">

<br>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <br>
        <?= Html::a('Create Reservation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_reserved',
            'number_of_days',
            'down_payment',
            'receipt_number',
            // 'online_id',
            // 'walkin_id'

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <br><br><br>
</div>
