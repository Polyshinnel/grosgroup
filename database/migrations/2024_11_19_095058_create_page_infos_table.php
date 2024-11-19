<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_infos', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        $data_items = [
            [
                'address' => '/',
                'title' => 'Grosgroup | Главная',
                'description' => 'Мы занимаемся аутсорсом закупочной деятельности, поставками, монтажем, проектированием и сметами, компания имеет богатый опыт и высокий профессионализм'
            ],
            [
                'address' => 'services/electrician',
                'title' => 'Grosgroup | Электрика',
                'description' => 'Электрика, кабельно-проводниковая продукция, кабельно-несущие системы, низковольтная и высоковольтная автоматика, высоковольтное оборудование, светотехника.'
            ],
            [
                'address' => 'services/plumber',
                'title' => 'Grosgroup | Сантехника',
                'description' => 'Насосное оборудование, Шаровые краны, задвижки и вентили, Арматура для водо и теплоснабжения.'
            ],
            [
                'address' => 'services/ventilation',
                'title' => 'Grosgroup | Вентиляционное оборудование',
                'description' => 'Вентиляционное оборудование, Кондиционеры бытового и промышленного назначения, Вентиляторы бытового и промышленного назначения'
            ],
            [
                'address' => 'services/common',
                'title' => 'Grosgroup | Поставка стройматериалов',
                'description' => 'Сухие смеси, теплоизоляция, древесно-плитные материалы,пеноблок, кирпич, Метизы, кровля, сайдинг, водосточные системы, Лакокрасочные материалы, ручной инструмент, хозтовары, пены, клей, герметики'
            ],

            [
                'address' => 'installation/electrician',
                'title' => 'Grosgroup | Монтаж электрики',
                'description' => 'Закрываем полностью весь спектор электромонтажных работ. Производство и установка электрощитового оборудования.'
            ],
            [
                'address' => 'installation/split',
                'title' => 'Grosgroup | Установка кондиционеров',
                'description' => 'Оказываем услуги по устоновке 3 видов климатических установок, Бытовые кондиционеры, Полупромышленные. Промышленные.'
            ],
            [
                'address' => 'installation/electrical-commutation',
                'title' => 'Grosgroup | Монтаж щитового оборудования',
                'description' => 'Разрабатываем и осуществляем сборку электрощитового оборудования по типовым и индивидуальным проектам под ключ от 2-х дней, с гарантией 2 года и доставкой по России'
            ],
            [
                'address' => 'installation/ventilation',
                'title' => 'Grosgroup | Установка вентиляции',
                'description' => 'Выполнением работы по вентиляции: Дымоудаление, Аспирация и очистка от масленого тумана, Общий обмен, Выполнение работ по техническому заданию'
            ],

            [
                'address' => 'contacts',
                'title' => 'Grosgroup | Контакты',
                'description' => 'Наши контакты, адреса и график работы'
            ],
            [
                'address' => 'works',
                'title' => 'Grosgroup | Наши работы',
                'description' => 'Пример наших работ в различных областях'
            ],
            [
                'address' => 'articles',
                'title' => 'Grosgroup | Статьи',
                'description' => 'Полезные статьи по строительной тематике. Делимся опытом.'
            ],
            [
                'address' => 'about',
                'title' => 'Grosgroup | О компании',
                'description' => 'Мы занимаемся аутсорсом закупочной деятельности, поставками, монтажем, проектированием и сметами, компания имеет богатый опыт и высокий профессионализм'
            ],
        ];

        foreach ($data_items as $item) {
            DB::table('page_infos')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_infos');
    }
};
