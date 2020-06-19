<footer class="footer">
            <div class="container">
                <div class="footer-row">
                    <div class="footer__col">
                        <div class="footer-title">Мой офис:</div>
                        <div class="footer-text">г.Казань ул. Бутлерова(точный адрес по предварительному звонку)</div>
                        <div class="clock">
                            <div class="clock-svg-wprap">
                                <svg class="clock-svg">
                                    <use xlink:href="/svg/sprite.svg#clock"></use>
                                </svg>
                            </div>
                            <div class="time">Пн-Пт: 08:00 – 20:00 <br> Сб: 08:00 – 15:00</div>
                        </div>
                    </div>
                    <div class="footer__col">
                        <div class="footer-title">Мои документы:</div>
                        <ul class="footer-list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Сертификаты</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Диплом</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Отчеты</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Удостоверение</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__col">
                        <div class="footer-title">Электронная почта:</div>
                        <a href="mailto:siraeva1618@gmail.ru" class="footer__link">siraeva1618@gmail.ru</a>
                        <div class="footer-title footer-title_mt_10">Телефон:</div>
                        <a href="tel:+7 962 565-67-64" class="footer__link">+7 962 565-67-64</a>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
            <div class="modal">
                <div class="close">
                    <svg class="close-svg">
                        <use xlink:href="/svg/sprite.svg#close"></use>
                    </svg>
                </div>
                <form id="form-ajax" class="form-modal">
                    <div class="modal-title">Закажите звонок</div>
                    <input name="name" class="input input-modal" placeholder="Имя"></input>
                    <input name="phone" class="input input-modal" placeholder="Телефон"></input>
                    <button class="button-2">Заказать</button>
                </form>
            </div>
        </footer>

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function($){
        new WOW().init();
    })
        
</script>
</body>
</html>
