@extends('layouts.base_layout')
@section('page_title', 'Щитовое оборудование')

@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li><a href="/installation">Монтаж оборудования</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>Щитовое оборудование</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">Монтаж оборудования — Щитовое оборудование</h1>

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
                        <div class="installation-link installation-link_active">
                            <img src="/assets/img/icons/services/electric-commutator.svg" alt="">
                            <p>Щитовое оборудование</p>
                        </div>
                    </a>

                    <a href="/installation/ventilation">
                        <div class="installation-link">
                            <img src="/assets/img/icons/services/ventilation.svg" alt="">
                            <p>Вентиляция</p>
                        </div>
                    </a>
                </div>
                <!-- /.montage-links -->

                <div class="montage-content">
                    <h3>Разрабатываем и осуществляем сборку электрощитового оборудования по типовым и индивидуальным проектам под ключ от 2-х дней, с гарантией 2 года и доставкой по России</h3>

                    <div class="montage-content-block">
                        <h4>Наши условия работы:</h4>
                        <ul>
                            <li>Выездная консультация на объекте заказчика</li>
                            <li>Оценка условий, разработка решения, составление сметы</li>
                            <li>Создание проектной документации, стандартного либо нетипового исполнения</li>
                            <li>Изготовление и поставка от 2-х дней</li>
                            <li>Монтаж, ввод в эксплуатацию, сдача комиссиям органов по надзору</li>
                        </ul>
                    </div>
                    <!-- /.montage-content-block -->

                    <div class="montage-content-block">
                        <h4>Наша продукция:</h4>
                        <ul>
                            <li>Вводно распределительные устройства (ВРУ,РП)</li>
                            <li>Устройства этажные (УЭРМ)</li>
                            <li>Шкафы (щиты) распределительные ШР (ЩР)</li>
                            <li>Панели распределительных щитов (ЩО)</li>
                            <li>Щиты автоматического ввода резерва (АВР)</li>
                            <li>Щиты аварийного отсвещения (ЩАО)</li>
                            <li>Щиты управления вентиляцией</li>
                        </ul>
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

                    <input type="submit" value="Отправить заявку" class="base-btn send-montage">
                </form>
                <!-- /.service-container__form -->
            </div>
            <!-- /.montage-block__column -->
        </div>
        <!-- /.montage-block -->
    </div>
@endsection
