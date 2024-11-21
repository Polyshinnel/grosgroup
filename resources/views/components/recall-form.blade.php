<div class="recall-form-block">
    <form class="recall-form form-item">
        <img src="/assets/img/icons/close.svg" alt="" class="close">
        <h2>Заявка на просчет</h2>
        <div class="recall-form-columns">
            <div class="recall-form-column">
                <div class="input-block">
                    <input type="text" name="name" id="name" placeholder="Ваше имя *">
                    <span class="err-text">Имя должно быть не менее 2х символов!</span>
                </div>
                <!-- /.input-block -->

                <div class="input-block">
                    <input type="text" name="email" id="email" placeholder="Email *">
                    <span class="err-text">Введите корректную почту вида example@example.com!</span>
                </div>
                <!-- /.input-block -->

                <div class="input-block">
                    <input type="text" name="phone" id="phone" placeholder="Телефон *">
                    <span class="err-text">Введите корректный телефон вида +7(999)999-99-99</span>
                </div>
                <!-- /.input-block -->
            </div>
            <!-- /.recall-form-column -->

            <div class="recall-form-column">
                <div class="input-block">
                    <textarea name="message" id="message" placeholder="Ваше сообщение"></textarea>
                </div>
                <!-- /.input-block -->
            </div>
            <!-- /.recall-form-column -->
        </div>
        <!--/.recall-form-columns-->

        <div class="recall-form-columns recall-form-columns_bottom">
            <div class="recall-form-column">
                <div class="accept-policy">
                    <input type="checkbox" checked name="policy" id="policy">
                    <label for="policy">Согласен на обработку персональны данных в соответствии с <a href="#">Пользовательским соглашением</a></label>
                </div>
                <!-- /.accept-policy -->
            </div>
            <!--/.recall-form-column-->

            <div class="recall-form-column recall-form-column_justify-end">
                <input type="submit" value="Отправить запрос" class="send-message base-btn" id="send-recall-form">
                <div class="await-btn base-btn" id="await-btn">
                    <img src="/assets/img/icons/gear-white.svg" alt="">
                    <p>Отправка</p>
                </div>
            </div>
            <!--/.recall-form-column-->
        </div>
        <!--/.recall-form-columns-->
    </form>
    <!--/.recall-form-->

    <div class="success-message form-item">
        <img src="/assets/img/icons/close.svg" alt="" class="close">
        <img src="/assets/img/icons/success.svg" alt="" class="succsess">
        <h2>Ваша заявка успешно отправлена</h2>
        <button class="base-btn close-success">Закрыть</button>
    </div>
    <!--/.success-message-->
</div>
