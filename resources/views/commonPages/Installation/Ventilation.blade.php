@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li><a href="/installation">Монтаж оборудования</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>Вентиляция</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">Монтаж оборудования — Вентиляция</h1>

        <div class="montage-block">
            <div class="montage-block__column montage-block__column-content">
                <h2 class="motage-title"><span>Шаг 1. </span>Выберите вид оборудования для монтажа</h2>
                <!-- /.motage-title -->

                <div class="montage-links">
                    <a href="/installation/electrician">
                        <div class="installation-link">
                            <img src="/assets/img/icons/services/electric.svg" alt="">
                            <p>Электрика</p>
                        </div>
                    </a>

                    <a href="/installation/split">
                        <div class="installation-link">
                            <img src="/assets/img/icons/services/conditioner.svg" alt="">
                            <p>Сплит-системы</p>
                        </div>
                    </a>

                    <a href="/installation/electrical-commutation">
                        <div class="installation-link">
                            <img src="/assets/img/icons/services/electric-commutator.svg" alt="">
                            <p>Щитовое оборудование</p>
                        </div>
                    </a>

                    <a href="/installation/ventilation">
                        <div class="installation-link installation-link_active">
                            <img src="/assets/img/icons/services/ventilation.svg" alt="">
                            <p>Вентиляция</p>
                        </div>
                    </a>
                </div>
                <!-- /.montage-links -->

                <div class="montage-content">
                    <div class="montage-content-block">
                        <h4>Выполнением работы по вентиляции:</h4>
                        <ul>
                            <li>Дымоудаление</li>
                            <li>Аспирация и очистка от масленого тумана</li>
                            <li>Общий обмен</li>
                            <li>Выполнение работ по техническому заданию</li>
                        </ul>

                        <p style="margin-top: 20px;">Для Вас также доступно проектирование любой сложности. В компании действует правило - скидка на проектные работы при условии комплексного заказа. </p>
                    </div>
                    <!-- /.montage-content-block -->
                </div>
            </div>
            <!-- /.montage-block__column -->

            <div class="montage-block__column montage-block__column-form">
                <h2 class="motage-title"><span>Шаг 2. </span>Укажите ваши контактные данные</h2>
                <!-- /.motage-title -->

                <form class="montage-block__form">
                    <div class="input-block">
                        <input type="text" name="name_montage" id="name_montage" placeholder="Ваше имя *">
                        <span class="err-text">Имя должно быть не менее 2х символов!</span>
                    </div>
                    <!-- /.input-block -->

                    <div class="input-block">
                        <input type="text" name="email_montage" id="email_montage" placeholder="Email *">
                        <span class="err-text">Введите корректную почту вида example@example.com!</span>
                    </div>
                    <!-- /.input-block -->

                    <div class="input-block">
                        <input type="text" name="phone_montage" id="phone_montage" placeholder="Телефон *">
                        <span class="err-text">Введите корректный телефон вида +7(999)999-99-99</span>
                    </div>
                    <!-- /.input-block -->

                    <input type="hidden" name="type_form" id="type-form" value="Установка: вентиляция">

                    <input type="submit" value="Отправить заявку" class="base-btn send-montage" id="send-motage-form">

                    <div class="await-btn base-btn">
                        <img src="/assets/img/icons/gear-white.svg" alt="">
                        <p>Отправка</p>
                    </div>

                    <div class="succsess-btn base-btn">
                        <img src="/assets/img/icons/gear-white.svg" alt="">
                        <p>Успешно отправлено</p>
                    </div>
                </form>
                <!-- /.service-container__form -->
            </div>
            <!-- /.montage-block__column -->
        </div>
        <!-- /.montage-block -->
    </div>
@endsection
