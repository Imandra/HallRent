<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Большой конференц-зал';
?>
<style type="text/css">
    .btn {
        text-decoration: none;
        outline: none;
        -webkit-appearance: none;
        border-radius: 0;
        display: block;
        white-space: nowrap;
        text-align: center;
        cursor: pointer;
        width: 150px;
        height: 32px;
        border: 0;
        background: #9ab73e;
        color: #fff;
        font: bold 16px/32px "Officina Sans C", Helvetica, Arial, "sans-serif";
        padding: 0 16px;
        -webkit-transition: all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .btn:hover {
        text-decoration: none;
        color: #fff;
        background: #b7b52a;
    }

   .image {
        margin: 24px 0;
    }

    .content ul {
        list-style: none;
    }

    .content li {
        position: relative;
        margin: 0 0 0.5em 0;
        padding: 0 0 0 16px;
    }

    .content ul > li::before {
        content: '';
        position: absolute;
        top: 0.75em;
        left: 4px;
        background: #8eb82d;
        width: 6px;
        height: 6px;
        margin: -4.5px -3px;
        border-radius: 1px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .content p, .content ol, .content ul {
        margin: 0 0 1em 0;
        padding: 0;
    }

    .main-table {
        margin: 24px -16px;
        padding: 0 16px;
        overflow: hidden;
        overflow-x: auto;
    }

    .main-table table {
        border-collapse: collapse;
        max-width: 100%;
        min-width: 450px;
    }

    .main-table th, .main-table td {
        border: 0;
        border-bottom: 1px solid #ece5cf;
        text-align: left;
        vertical-align: top;
        padding: 12px;
    }

    .main-table th:first-child, .main-table td:first-child {
        padding-left: 0;
    }

    .main-table th:last-child, .main-table td:last-child {
        padding-right: 0;
    }

    .main-table .center {
        text-align: center;
    }

    .main-table th {
        font-weight: bold;

    .big {
        font-size: 18px;
    }
</style>

<div class="inner-page-title"><h1><?= Html::encode($this->title) ?></h1></div>
<div class="slider-photos">
    <ul class="big">
        <li>
            <div class="image"><img src="/img/conferences1.jpg"></div>
        </li>
    </ul>
</div>

<div class="content">
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
</div><div class="btns">
   <a class="btn link-modal" href="#">Оставить заявку</a>
</div>
</div>