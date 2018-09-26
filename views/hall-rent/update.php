<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HallRent */

$this->title = 'Update Hall Rent: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Hall Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hall-rent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
