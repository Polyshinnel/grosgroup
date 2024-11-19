@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li><a href="/installation">Монтаж оборудования</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>Электрика</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">Монтаж оборудования — Электрика</h1>

        <div class="montage-block">
            <div class="montage-block__column montage-block__column-content">
                <h2 class="motage-title"><span>Шаг 1. </span>Выберите вид оборудования для монтажа</h2>
                <!-- /.motage-title -->

                <div class="montage-links">
                    <a href="/installation/electrician">
                        <div class="installation-link installation-link_active">
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
                        <div class="installation-link">
                            <img src="/assets/img/icons/services/ventilation.svg" alt="">
                            <p>Вентиляция</p>
                        </div>
                    </a>
                </div>
                <!-- /.montage-links -->

                <div class="montage-content">
                    <h3>Электромонтажные работы.</h3>

                    <div class="montage-content-block">
                        <h4>Проводим работы:</h4>
                        <ul>
                            <li>Устройство наружных инженерных сетей и коммуникаций. Прокладка кабеля до 35 Кв, установка опор освещения.</li>
                            <li>Устройство внутренних инженерных систем и оборудования. Прокладка кабеля, установка электротехнического и осветительного оборудования.</li>
                            <li>Проектирование внешних и внутренних инженерных сетей и коммуникаций.</li>
                            <li>Изготовление и поставка от 2-х дней</li>
                            <li>Производство и установка электрощитового оборудования.</li>
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
