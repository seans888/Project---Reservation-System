<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RegularSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Regulars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regular-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Regular', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'salary',
            'status',
            'classification',
            'nature_of_service',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
