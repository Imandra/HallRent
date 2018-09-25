<?php

/* @var $this yii\web\View */

$this->title = 'Test Task';
?>
<section class="content-center">

    <div class="inner-page-title"><h1>Бронирование</h1></div>

    <div class="content-wrap mb50">
        <div class="col-2">

            Здесь код бронирования

        </div>
        <div class="col not-on-mobile">

            <div class="widget widget-offers in-sidebar mt10">
                <h3>Спецпредложения</h3>
                <div class="item item-long">
                    <h4>Длительное проживание</h4>
                    <a class="conditions" href="#">Условия акции</a>
                </div>
                <div class="item item-special">
                    <h4>Специальный тариф</h4>
                    <a class="conditions" href="#">Условия акции</a>
                </div>
                <div class="item item-gifts">
                    <h4>Подарки именинникам</h4>
                    <a class="conditions" href="#">Условия акции</a>
                </div>
            </div>

            <div class="content-title mt45 tablet-line-height-29"><h3>Прямое бронирование</h3></div>
            <ul class="contacts-list2 mt30">
                <li class="phone"><span class="just-on-desctop">Телефон:</span> <a href="tel:+78007005292">+7 800 700 52 92</a></li>
                <li class="phone"><span class="just-on-desctop">Телефон:</span> <a href="tel:+78127005292">+7 812 700 52 92</a></li>
                <li class="email"><span class="just-on-desctop">Email:</span> <a href="mailto:info@grandcanyon-hotel.ru">info@grandcanyon-hotel.ru</a></li>
            </ul>

            <div class="content-title mt45"><h3>Адрес</h3></div>
            <ul class="contacts-list mt30 mb50">
                <li class="address">Санкт-Петербург,<br class="not-on-desctop"> ул. Шостаковича, 2</li>
            </ul>

            <div class="widget widget-actions2">
                <h3>Акции и скидки</h3>
                <p>Получайте письма о скидках и акциях<br> на вашу почту:</p>
                <form class="subscribe-form" action="" method="post">
                    <input type="text" name="" value="" placeholder="Введите ваш email">
                    <input type="submit" value="Следить за скидками">
                </form>
            </div>

        </div>
    </div>

</section><!-- .content-center -->