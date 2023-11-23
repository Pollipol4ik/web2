<footer>
    <div class="naming">Контакты</div>
    <div class="phone-hol-2">
        <div class="trub">
            <img src="image/phone.png" alt="">
        </div>
        <div class="num-2">
            +7(919)-341-81-77
        </div>
    </div>
    <div class="mail">
        zooOnly@gmail.com
    </div>
    <div class="address">
    г. Москва, Скатертный переулок, дом 28
    </div>
    <div class="time">
        <?php
        date_default_timezone_set('Europe/Moscow');
        $currentDateTime = date('Y-m-d H:i:s');
        echo "Текущая дата: " . $currentDateTime;
        ?>
    </div>
</footer>
