<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HallRent */

$this->title = 'Create Hall Rent';
$this->params['breadcrumbs'][] = ['label' => 'Hall Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hall-rent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
