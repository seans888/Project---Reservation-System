<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Regular */

$this->title = 'Create Regular';
$this->params['breadcrumbs'][] = ['label' => 'Regulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
