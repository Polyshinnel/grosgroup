@extends('layouts.base_layout')
@section('page_title', 'Электрика')

@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>О компании</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">О компании</h1>

        <div class="about-text">
            <p>Дорогие друзья!</p>
            <p>Меня зовут Заульский Максим Игоревич!</p>
            <p>Я руководитель группы компаниий ООО “GROSGROUP”!</p>
            <p><b>Главная ценность моего труда</b> - это создание лучшего сервиса по аутсорсингу закупочной деятельности и совершенствование качества монтажных работ в инженерно-технической сфере. Я отбираю к себе в команду самых лучших и надежных специалистов. В процессе работы специалисты ежегодно отправляются на повышение квалификации и обучению новым знаниям в сфере инженерно-технической деятельности. Помимо обучения, сотрудники регулярно посещают выставки для изучения новинок на рынке, каждый в своей сфере.</p>
            <p>Считаю, что самый главный фактор - это профессиональное и квалифицированное выполнение работ, услуг и задач. Куда бы заказчик не обратился, он всегда ждет качественного и быстрого выполнения поставленных задач. И по этому я и моя команда нацелены именно на такой результат, и Ваши ожидания не будут напрасны, это я Вам гарантирую.</p>
            <p>Мы осуществляем полный комплекс услуг, начиная от проектирования и заканчивая сдачей объекта. Сюда же входит и обеспечение необходимым инженерным оборудованием и материалами предприятий, заводов и различных строительных площадок.</p>
        </div>
        <!-- /.about-text -->

        <div class="about-text">
            <h2>Поставка</h2>
            <p><b>Наши преимущества</b> -  индивидуальный подход, гибкость и отсутствие бюрократии. Скорость принятия решения происходит в считанные секунды. Для постоянных клиентов предоставляем отсрочку платежа от 14 до 30 календарных дней.</p>
            <p>Есть возможность получить счет или коммерческое предложение по совершенно не пересекающимся номенклатурным группам товара. Наши логисты рассчитают самый экономичный и оптимальный маршрут по сбору груза, что позволяет существенно сэкономить на транспортных расходах.</p>
            <p>Заказывая у нас, Вы получаете исключительный сервис в сфере закупок.</p>
            <p>Скорость, точность, конкурентная рыночная цена. Присылайте нам заявки любой сложности, наша команда всегда ответить положительным и быстрым результатом, без товара Вы не останетесь. </p>
        </div>
        <!--/.about-text-->

        <div class="about-text">
            <h2>Монтаж</h2>
            <p>Мы монтируем и настраиваем практически любое оборудование. Выполняем большинство строительных, сварочных, электротехнических, вентиляционных и слесарных работ.</p>
            <p>На сайте Вы можете оставить заявку, выбрав интересующий Вас раздел работ и приложить к ней сметную либо иную документацию, наши специалисты оценят стоимость работ и свяжутся с Вами для обсуждения условий. Все наши специалисты имеют допуски на высоту, обучены на различные группы по электробезопасности от 1000В до и выше, а также имеют удостоверения ДПО и ТБ. Хотелось бы отметить, что наша компания дает гарантию на все виды работ, соблюдает их и поддерживает связь со всеми клиентами.</p>
        </div>
        <!--/.about-text-->

        <div class="about-text">
            <h2>Проектирование и сметы</h2>
            <p>Наша команда инженеров - технологов в кратчайшие сроки подготовит для Вас смету или проект практически любой сложности. Вы получите развернутое представление Вашего будущего цеха, производственного здания и других производственных, а также частных объектов. В работы входит и прокладка в уже существующих помещениях технологических линий всех коммуникаций. Да и важный момент, вы получите не просто листок бумаги с цифрами, а полноценный проект, в том числе в 3D моделировании, что очень важно.</p>
        </div>
        <!--/.about-text-->

        <div class="sertificates">
            <h2>Сертификаты</h2>

            <div class="sertificates-block">
                <div class="sertificates-block__unit">
                    <a href="/assets//img/sertificates/ru-c-ruhb10b02325-22.jpg" data-fancybox="gallery">
                        <img src="/assets//img/sertificates/ru-c-ruhb10b02325-22.jpg" alt="">
                    </a>
                </div>

                <div class="sertificates-block__unit">
                    <a href="/assets//img/sertificates/sertifikat-sovplim.jpg" data-fancybox="gallery">
                        <img src="/assets//img/sertificates/sertifikat-sovplim.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- /.sertificates -->

        <div class="partners">
            <h2>Наши партнеры</h2>

            <section class="splide partners-block" id="slider1">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="/assets//img/clients/kalugaputmash.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/partner-m.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/rosseti.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/rosva.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/sg.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/sovplim.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/teplosphere.webp" alt=""></li>
                        <li class="splide__slide"><img src="/assets//img/clients/typhoon.webp" alt=""></li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- /.partners -->
    </div>


    <script src="assets/js/splide/splide.min.js"></script>
    <script src="assets/js/fancybox/fancybox.umd.js"></script>

    <script>
        let options = {
            type   : 'loop',
            perPage: 5,
            autoWidth: true,
            arrows: false,
            padding: 40,
            pagination: false,

            breakpoints: {
                640: {
                    perPage: 1,
                    arrows: true,
                    padding: 50
                }
            }
        };

        new Splide('#slider1', options).mount();
    </script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection


