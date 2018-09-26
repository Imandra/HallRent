<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hall Rents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hall-rent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hall Rent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_name',
            'email:email',
            'phone_number',
            'preferences:ntext',
            //'application_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
