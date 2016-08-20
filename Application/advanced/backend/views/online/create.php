<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Online */

$this->title = 'Create Online';
$this->params['breadcrumbs'][] = ['label' => 'Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
