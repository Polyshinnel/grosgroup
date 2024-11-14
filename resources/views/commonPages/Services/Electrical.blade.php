@extends('layouts.base_layout')
@section('page_title', 'Электрика')

@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li><a href="/services">Услуги</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>Электрика</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">Комплексное снабжение — Электрика</h1>

        <div class="services-links">
            <a href="/services/electrician">
                <div class="services-link services-link_active">
                    <img src="/assets/img/icons/services/electric.svg" alt="">
                    <p>Электрика</p>
                </div>
            </a>

            <a href="/services/plumber">
                <div class="services-link">
                    <img src="/assets/img/icons/services/plumber.svg" alt="">
                    <p>Сантехника</p>
                </div>
            </a>

            <a href="/services/ventilation">
                <div class="services-link">
                    <img src="/assets/img/icons/services/ventilation.svg" alt="">
                    <p>Вентиляция</p>
                </div>
            </a>

            <a href="/services/common">
                <div class="services-link">
                    <img src="/assets/img/icons/services/common.svg" alt="">
                    <p>Общестрой</p>
                </div>
            </a>
        </div>
        <!-- /.services-links -->


        <div class="service-container">
            <div class="service-container__content">
                <div class="service-container__content-columns">
                    <div class="service-container__content-column service-container__content-column_big">
                        <h2>Электротехническое оборудование</h2>

                        <ul>
                            <li>Провода и кабели всех сечений напряжением до 110 кВ.</li>
                            <li>Светильники и лампы различных типов и модификаций</li>
                            <li>Опоры и кронштейны для уличного освещения</li>
                            <li>Изделия для прокладки кабеля</li>
                            <li>Розетки и выключатели</li>
                            <li>Щитовое оборудование</li>
                            <li>Автоматические выключатели и УЗО</li>
                            <li>Трансформаторы и электродвигатели</li>
                            <li>Промышленное оборудование 6-10 кВ</li>
                        </ul>
                    </div>
                    <!-- /.service-container__content-column -->

                    <div class="service-container__content-column service-container__content-column_sm">
                        <h2>Сроки поставки</h2>

                        <p>от 2 до 3 дней</p>

                        <div class="service-container__content-column-links">
                            <a href="/">
                                <div class="service-container__content-column-link">
                                    <img src="/assets/img/icons/documents.svg" alt="">
                                    <p>Бланк договора</p>
                                </div>
                            </a>

                            <a href="/delivery">
                                <div class="service-container__content-column-link">
                                    <img src="/assets/img/icons/delivery.svg" alt="">
                                    <p>Условия доставки</p>
                                </div>
                            </a>
                        </div>
                        <!-- /.service-container__content-column-links -->
                    </div>
                    <!-- /.service-container__content-column -->
                </div>
                <!-- /.service-container__content-columns -->

                <div class="service-container__content-stages-block">
                    <h2>Этапы начала сотрудничества</h2>

                    <div class="service-container__content-stages">
                        <div class="service-container__content-stage">
                            <h3>01</h3>
                            <p>Вы оставляете заявку, через любую форму на сайте. При необходимости прикрепите документы или фото.</p>
                        </div>
                        <!-- /.service-container__content-stage -->

                        <div class="service-container__content-stage">
                            <h3>02</h3>
                            <p>Менеджер связывается с Вами. Уточняет детали. Отправляет Вам коммерческое предложение.</p>
                        </div>
                        <!-- /.service-container__content-stage -->

                        <div class="service-container__content-stage">
                            <h3>03</h3>
                            <p>Заключаем договор и поставляем заказанный Вами товар</p>
                        </div>
                        <!-- /.service-container__content-stage -->
                    </div>
                    <!-- /.service-container__content-stages -->
                </div>
                <!-- /.service-container__content-stages-block -->

                <div class="advantages-block">
                    <h2>В чем выгода?</h2>

                    <p>Комплексное снабжение имеет целый ряд преимуществ, в силу которых его выбирают строительные компании, которые серьезно относятся к планированию своего времени и расходов:</p>

                    <ul>
                        <li>Качество материалов и соответствие их ГОСТам или ТУ контролируется централизованно.</li>
                        <li>Комплектация производится без вмешательства заказчика в организационный процесс снабжения.</li>
                        <li>Выбираются лучшие оптовые цены.</li>
                        <li>Снижается риск недобросовестной конкуренции между поставщиками.</li>
                        <li>Снижается количество контрагентов заказчика, упрощается ведение документации.</li>
                    </ul>
                </div>
                <!-- /.advantages-block -->
            </div>
            <!-- /.service-container__content -->

            <div class="service-container__form-block">
                <form class="service-container__form">
                    <h2>Заказ оборудования</h2>

                    <div class="input-block">
                        <input type="text" name="name_service" id="name_service" placeholder="Ваше имя *">
                        <span class="err-text">Имя должно быть не менее 2х символов!</span>
                    </div>
                    <!-- /.input-block -->

                    <div class="input-block">
                        <input type="text" name="email_service" id="email_service" placeholder="Email *">
                        <span class="err-text">Введите корректную почту вида example@example.com!</span>
                    </div>
                    <!-- /.input-block -->

                    <div class="input-block">
                        <input type="text" name="phone_service" id="phone_service" placeholder="Телефон *">
                        <span class="err-text">Введите корректный телефон вида +7(999)999-99-99</span>
                    </div>
                    <!-- /.input-block -->

                    <div class="input-block">
                        <div class="input-block__checkbox">
                            <input type="checkbox" name="instalation" id="instalation">
                            <label for="instalation">Необходимо провести монтаж</label>
                        </div>
                    </div>
                    <!-- /.input-block -->

                    <input type="hidden" name="type_form" value="Электрика">

                    <input type="submit" value="Отправить заявку" class="base-btn send-demand">
                </form>
                <!-- /.service-container__form -->
            </div>
            <!-- /.service-container__form-block -->
        </div>
        <!-- /.service-container -->
    </div>
@endsection
