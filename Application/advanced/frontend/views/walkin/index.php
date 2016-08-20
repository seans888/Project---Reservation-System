<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WalkinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Walkins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="walkin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Walkin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'actual_time_in',
            'actual_time_reserve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
