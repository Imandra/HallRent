<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);
LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="main-wrap">

    <div class="page-top short">

        <header>
            <div class="header-top">
                <div class="phones"><a href="tel:+78007005292">+7 800 700 52 92</a> , &nbsp; <a href="tel:+78127035292">+7 812 703 52 92</a></div>
                <br class="just-on-mobile">
                <div class="lang">Русский <i></i> <a href="#">English</a></div>
            </div>
            <div class="header-bottom">
                <div class="center">
                    <a class="logo" href="#"></a>
                    <nav class="main-nav">
                        <ul>
                            <li><a href="#">главная</a></li>
                            <li><a href="#">о гостинице</a></li>
                            <li class="has-sub"><a href="#">номера</a>
                                <ul class="sub">
                                    <li><a href="#">студия стандарт</a></li>
                                    <li><a href="#">студия комфорт</a></li>
                                    <li><a href="#">бизнес стандарт</a></li>
                                    <li><a href="#">бизнес комфорт</a></li>
                                    <li><a href="#">люкс</a></li>
                                    <li><a href="#">де люкс</a></li>
                                </ul>
                            </li>
                            <li><a href="#">спецпредложения</a></li>
                            <li><a href="#">контакты</a></li>
                            <li class="not-on-desctop block"><a href="#">бронирование</a></li>
                        </ul>
                    </nav>
                    <div class="btn-nav-open"><span>Меню <i></i></span></div>
                    <div class="socials">
                        <a class="fb" href="#"></a>
                        <a class="vk" href="#"></a>
                        <a class="bo" href="#"></a>
                        <a class="ta" href="#"></a>
                    </div>
                </div>
            </div>
        </header>

        <div class="btn-reserve-wrap">
            <a href="#" class="btn-reserve">Забронировать номер</a>
        </div>

    </div><!-- .page-top -->

<?= $content; ?>

</div><!-- .main-wrap -->

<footer>
    <div class="footer-top">
        <div class="center clearfix">
            <a class="logo" href="#"></a>
            <div class="col1">
                <h3>Контакты:</h3>
                <ul>
                    <li class="address">Russia, St-Petersburg, 196158<br> 3-113, Pulkovskaya st.</li>
                    <li class="phone">тел.: <a href="tel:+78007005292">+7 (800) 700 52 92</a></li>
                    <li class="email"><a href="mailto:info@grandcanyon-hotel.ru">info@grandcanyon-hotel.ru</a></li>
                </ul>
            </div>
            <div class="col2">
                <h3>Меню:</h3>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О гостинице</a></li>
                    <li><a href="#">Номера</a></li>
                    <li><a href="#">Спецпредложения</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="col3">
                <h3>Отзывы гостей:</h3>
                <a class="review" href="#"><img src="img/footer-review1.png" width="143" height="97" alt=""></a>
                <a class="review" href="#"><img src="img/footer-review2.png" width="99" height="99" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="center">
            <a class="studio" href="#"></a>
            <div class="copyright">© Copyright 2015.&nbsp; Апарт-отель Гранд-Каньон</div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>