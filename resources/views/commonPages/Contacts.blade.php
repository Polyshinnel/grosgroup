@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>Контакты</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">Контакты</h1>

        <div class="contacts-block">
            <div class="contacts-content">
                <a href="tel:+79611255550">
                    <div class="contacts-content__item">
                        <div class="contacts-content__item-img">
                            <img src="assets/img/icons/contacts/phone.svg" alt="">
                        </div>
                        <!-- /.contacts-content__item-img -->
                        <div class="contacts-content__item-text">
                            <span>Телефон:</span>
                            <p>+7 (961) 125-55-50</p>
                        </div>
                    </div>
                </a>

                <div class="contacts-content__item">
                    <div class="contacts-content__item-img">
                        <img src="assets/img/icons/contacts/time.svg" alt="">
                    </div>
                    <!-- /.contacts-content__item-img -->
                    <div class="contacts-content__item-text">
                        <span>Адрес офиса</span>
                        <p>248021, Калужская область, город Калуга,<br>
                            Оружной переулок, дом 4</p>
                    </div>
                </div>

                <a href="mailto:">
                    <div class="contacts-content__item">
                        <div class="contacts-content__item-img">
                            <img src="assets/img/icons/contacts/email.svg" alt="">
                        </div>
                        <!-- /.contacts-content__item-img -->
                        <div class="contacts-content__item-text">
                            <span>Email</span>
                            <p>info@sprklg.ru</p>
                        </div>
                    </div>
                </a>

                <a href="mailto:buy@sprklg.ru">
                    <div class="contacts-content__item">
                        <div class="contacts-content__item-img">
                            <img src="assets/img/icons/contacts/email.svg" alt="">
                        </div>
                        <!-- /.contacts-content__item-img -->
                        <div class="contacts-content__item-text">
                            <span>Email для поставщиков</span>
                            <p>buy@sprklg.ru</p>
                        </div>
                    </div>
                </a>

                <div class="contacts-content__item">
                    <div class="contacts-content__item-img">
                        <img src="assets/img/icons/contacts/time.svg" alt="">
                    </div>
                    <!-- /.contacts-content__item-img -->
                    <div class="contacts-content__item-text">
                        <span>Режим работы:</span>
                        <p>Работаем с 9:00 до 17:00</p>
                    </div>
                </div>
            </div>
            <!-- /.contacts-content -->

            <div class="contacts-form-block">
                <form class="contacts-form">
                    <h2>Напишите свой вопрос и отравьте нам!</h2>
                    <p class="form-sub-text">Заполните форму ниже и отправьте заявку. Наш менеджер свяжется с Вами в ближайшее время и ответит на Ваш вопрос</p>

                    <div class="input-line">
                        <div class="input-line-item">
                            <div class="input-block">
                                <input type="text" name="contacts-name" id="contacts-name" placeholder="Ваше имя *">
                                <span class="err-text">Имя должно быть не менее 2х символов!</span>
                            </div>
                            <!-- /.input-block -->
                        </div>
                        <!-- /.input-line-item -->
                        <div class="input-line-item">
                            <div class="input-block">
                                <input type="text" name="contacts-phone" id="contacts-phone" placeholder="Ваш телефон *">
                                <span class="err-text">Имя должно быть не менее 2х символов!</span>
                            </div>
                            <!-- /.input-block -->
                        </div>
                        <!-- /.input-line-item -->
                    </div>
                    <!--/.input-line-->

                    <div class="input-block">
                        <textarea name="contacts-message" id="contacts-message" placeholder="Ваше сообщение *"></textarea>
                    </div>
                    <!-- /.input-block -->

                    <input type="submit" value="Отправить запрос" class="send-message base-btn">
                    <div class="await-btn base-btn">
                        <img src="assets/img/icons/gear-white.svg" alt="">
                        <p>Отправка</p>
                    </div>
                </form>
                <!-- /.contacts-form -->
            </div>
            <!-- /.contacts-form-block -->
        </div>
        <!-- /.contacts-block -->

        <div class="map-block">
            <h2>Мы на карте</h2>

            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6e165f2acb5c9ffe5ff34c969a19b73ca32e6f940fd867717520853bc8dab4b4&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <!-- /.map-block -->
    </div>
@endsection


