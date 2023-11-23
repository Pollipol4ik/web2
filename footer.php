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
        polinakuptzova23@gmail.com
    </div>
    <div class="address">
        г. Сочи, ул. Гагарина, дом 53
    </div>
    <div class="time">
        <?php
        date_default_timezone_set('Europe/Moscow');
        $currentDateTime = date('Y-m-d H:i:s');
        echo "Сформировано: " . $currentDateTime;
        ?>
    </div>
    <div class="panel"> 
        <a class='nav-items' href="#">ГЛАВНАЯ</a>
        <a class='nav-items' href="#">КАТАЛОГ</a>
        <a class='nav-items' href="#">КОНТАНТЫ</a>
        <a class='nav-items' href="#">О НАС</a>
        <a class='nav-items' href="author.php">ЗАБРОНИРОВАТЬ</a>
    </div>
</footer>
