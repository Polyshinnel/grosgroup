<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <link rel="canonical" href="{{$pageInfo['canonical']}}">
    <meta name="title" property="title" content="{{$pageInfo['title']}}">
    <meta name="description" property="description" content="{{$pageInfo['description']}}">
    <meta name="og:type" property="og:type" content="website">
    <meta name="og:title" property="og:title" content="{{$pageInfo['title']}}">
    <meta name="og:description" property="og:description" content="{{$pageInfo['title']}}">

    <title>{{$pageInfo['title']}}</title>
</head>
<body>
<div class="container">
    <header class="header">
        <a href="tel:+79611255550" class="phone-btn-header-link">
            <div class="phone-btn">
                <img src="/assets/img/icons/phone.svg" alt="">
            </div>
        </a>

        <div class="logo-block">
            <a href="/">
                <img src="/assets/img/new-logo.png" alt="">
            </a>

            <div class="logo-block__name">
                <div class="logo-block__name-item">
                    <span>GROSSERVICE</span>
                    <p>Обслуживание и монтаж</p>
                </div>
                <!-- /.logo-block__name-item -->

                <div class="logo-block__name-item logo-block__name-item_mod">
                    <span>GROSPROJECT</span>
                    <p>Проектное бюро</p>
                </div>
                <!-- /.logo-block__name-item -->
            </div>
            <!-- /.logo-block__name -->
        </div>
        <!--/.logo-block-->

        <div class="call-menu-block">
            <div class="phone">
                <img src="/assets/img/icons/phone.svg" alt="">
                <a href="tel:+79611255550">+7 961 125 55 50</a>
            </div>
            <!--/.phone-->

            <div class="calc-btn">
                <div class="calc-btn-icon">
                    <img src="/assets/img/icons/calc.svg" alt="">
                </div>
                <div class="calc-text">
                    <p>Заявка на просчет</p>
                </div>
                <!-- /.calc-text -->
            </div>
            <!-- /.calc-btn -->

            <div class="menu-btn-block">
                <span>Меню</span>

                <div class="menu-btn">
                    <img src="/assets/img/icons/menu.svg" alt="">
                </div>
                <!-- /.menu-btn -->
            </div>
            <!-- /.menu-btn-block -->
        </div>
        <!-- /.call-menu-block -->
    </header>
    <div class="main-block">
        <div class="main-block__container">
            <img src="/assets/img/main-bg.jpg" alt="" class="main-bg">

            <div class="main-block__container-substrate">
                <div class="social-block">
                    <a href="https://vk.com/public198428515">
                        <span>VK</span>
                    </a>

                    <a href="https://youtube.com/@SnabPromResurs?si=QeBTWdCIv9oVOzH8">
                        <span>YO</span>
                    </a>

                    <a href="https://www.instagram.com/gukasiayn/">
                        <span>IN</span>
                    </a>
                </div>
                <!--/.social-block-->

                <div class="main-block__container-wrapper">
                    <div class="main-title__block">
                        <div class="line_main"></div>
                        <h1 class="main-title">
                            Доставляем<br>
                            и монтируем инженерное<br>
                            оборудование
                        </h1>
                    </div>
                    <!--/.main-title__block-->

                    <div class="main-block__subtitle">
                        <h2>Оставьте время для более важных дел, остальное мы сделаем за Вас!</h2>
                        <p class="main-block__subtitle-text">Электротехническое оборудование, вентиляция, отопительное оборудование,<br>
                            системы безопасности, видеонаблюдение, а также системы для<br>
                            водоснабжения и канализации.
                        </p>

                        <div class="main-block__subtitle-btns">
                            <div class="main-block__subtitle-btns-block">
                                <a href="/works">
                                    <button class="main-block__subtitle-btn">
                                        <img src="/assets/img/icons/gallery.svg" alt="">
                                        <p>Наши работы</p>
                                    </button>
                                </a>
                                <a href="https://www.rsg-pride.ru/">
                                    <button class="main-block__subtitle-btn">
                                        <img src="/assets/img/icons/calc.svg" alt="">
                                        <p>Просчет проектирования</p>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.main-block__subtitle -->
                </div>
                <!--/.main-block__container-wrapper-->
            </div>
            <!-- /.main-block__container-substrate -->
        </div>
        <!--/.main-block__container-->

        <div class="menu-info">
            <a href="/services">
                <div class="menu-info__block menu-info__block_dark">
                    <div class="menu-info__block-title">
                        <img src="/assets/img/icons/wrench.svg" alt="">
                        <h2>Комплексное<br>снабжение</h2>
                    </div>
                    <p>Перейти в каталог</p>
                </div>
                <!-- /.menu-info__block -->
            </a>

            <a href="/installation">
                <div class="menu-info__block">
                    <div class="menu-info__block-title">
                        <img src="/assets/img/icons/gear.svg" alt="">
                        <h2>Монтаж<br>оборудования</h2>
                    </div>
                    <p>Выбрать оборудование</p>
                </div>
                <!-- /.menu-info__block -->
            </a>
        </div>
        <!--/.menu-info-->
    </div>
    <!--/.main-block-->
</div>

@include('components.menu')

@include('components.recall-form')

<script src="/assets/js/axios.min.js"></script>
<script src="/assets/js/inputmask.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
