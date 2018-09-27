<?php

/* @var $this yii\web\View */
/* @var $model app\models\HallRent */


use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

$this->title = 'Большой конференц-зал';
?>

<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif;?>

<div class="inner-page-title"><h1><?= Html::encode($this->title) ?></h1></div>
<div class="slider-photos">
    <ul class="big">
        <li>
            <div class="image"><img class="conferences" src="/img/conferences1.jpg"></div>
        </li>
    </ul>
</div>

<div class="prices">
    <ul>
        <li>Площадь &ndash; 86 кв.м.</li>
        <li>Вместимость &ndash; 50 чел.</li>
        <li>Цена &ndash; от 1 250 руб./час</li>
    </ul>
    <p>Большой зал площадью 86 квадратных метров рассчитан на комфортное размещение 50 человек.&nbsp; Согласно Вашим предпочтениям, возможны разные варианты рассадки:</p>
    <ul>
        <li>Театр &ndash; до 60 чел.</li>
        <li>Класс &ndash; 25 чел.</li>
        <li>Круглый стол &ndash; 25 чел.</li>
        <li>Буквой &laquo;П&raquo; - 20 чел.</li>
        <li>Прием &ndash; 40 чел.</li>
    </ul>
    <div class="main-table">
        <table>
            <tbody>
            <tr>
                <th>Услуга</th>
                <th>Руб./час*</th>
                <th class="nowrap">4 часа</th>
                <th class="nowrap">8 часов</th>
            </tr>
            <tr>
                <td><strong>Конференц-пакет &laquo;Эконом&raquo;</strong>
                    <ul>
                        <li>аренда зала</li>
                        <li>проекционный экран</li>
                        <li>флипчарт</li>
                        <li>маркеры и губка</li>
                        <li>кулер с водой</li>
                        <li>навигация</li>
                        <li>безлимитный доступ к Wi-Fi</li>
                    </ul>
                </td>
                <td><strong>1 250</strong></td>
                <td><strong>4 900</strong></td>
                <td><strong>9 600</strong></td>
            </tr>
            <tr>
                <td><strong>Конференц-пакет &laquo;Стандарт&raquo;</strong>
                    <ul>
                        <li>аренда зала</li>
                        <li>мультимедийный проектор с лазерной указкой</li>
                        <li>проекционный экран</li>
                        <li>флипчарт</li>
                        <li>маркеры и губка</li>
                        <li>кулер с водой</li>
                        <li>навигация</li>
                        <li>безлимитный доступ к Wi-Fi</li>
                    </ul>
                </td>
                <td><strong>1 600</strong></td>
                <td><strong>6 200</strong></td>
                <td><strong>12 000</strong></td>
            </tr>
            <tr>
                <td class="center" colspan="4"><em>*Минимальный срок аренды зала &ndash; 2 часа.</em></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="btns">

        <?php
        Modal::begin([
            'header' => '<h2 class="app-header">Заявка</h2>',
            'toggleButton' => [
                'label' => 'Оставить заявку',
                'tag' => 'a',
                'class' => 'btn link-modal',
            ],
        ]);
        ?>

        <div class="hall-rent-form">

            <?php $form = ActiveForm::begin([
                    'action' => 'create',
                    'method' => 'post',
            ]); ?>

            <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'preferences')->textarea(['rows' => 6]) ?>

            <p>Нажимая на кнопку "Отправить", я даю <strong>согласие на обработку моих персональных данных</strong></p>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn', 'style' => 'width: 100%']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <?php Modal::end(); ?>
    </div>
</div>
