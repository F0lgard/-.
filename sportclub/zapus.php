<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/plashka.css">
    <link rel="stylesheet" href="css/zapus.css">
    <title>Запис</title>
</head>
<body>
<?php 
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);

}

?>
<div class="page">
    <header class="plashka">
        <div class="fonPl"></div>
        <a href="index.php"><img src="img/Logo club (1).png" class="logoPl" alt="logo"></a>
    <a href="pro club.php" class="TPl1">Про клуб</a>
        <a href="rozklad.php" class="TPl2">Розклад</a>
        <a href="cinu.php" class="TPl3">Ціни</a>
        <a href="news.php" class="TPl4">Новини</a>
        <a href="poslygu.php" class="TPl5">Послуги</a>
            <a href="https://uk-ua.facebook.com/"><img src="img/facebook.png" class="face" alt="facebook"></a>
            <a href="https://www.instagram.com/"><img src="img/logoinst.png" class="inst" alt="inst"></a>

       <?php 

        if(isset($_SESSION['user'])){
            echo $_SESSION['user'];
        echo "
            <div class='button-vxid'>
            <a href='user/form/logout.php'><button type='button' class='but-vxid'>Вихід</button></a>
        </div>";
}

else {
    echo "
            <div class='button-vxid'>
            <a href='user/form/login.php'><button type='button' class='but-vxid'>Вхід</button></a>
        </div>";
}

        ?>
        
          
    </header>
   
    <div class="case-free">
        <img src="img/1.png" class="img-free" alt="img-free">
        <div class="fon-free"></div>
        <div class="text-free">
            <span class="pershe">Перше</span>
            <span class="n1">1</span>
            <span class="tren">Тренування</span>
            <img src="img/Стікман.png" class="stick" alt="stick">
            <span class="bezk">БЕЗКОШТОВНО</span>
            <span class="free">FREE</span>
        </div>
        <div class="button-free">
            <a href="zapus.php"><button type="button" class="but-free">Запис на тренування</button></a>
        </div>
    </div>
    <main class="main">
        <div class="case-zapus">
            <div class="fon-pos"></div>
            <ul class="name-case-z">
                <li class="scobaz">[</li>
                <li class="name-zap">ЗАПИС</li>
                <li class="scobaz">]</li>
            </ul>
        <form method="POST" action="process_form.php" class="form-zap">
            <select name="response" id="response" required>
                <option disabled selected>Оберіть тренера (обов’язково)</option>
                <option value="Цецілія Зінько">Цецілія Зінько</option>
                <option value="Зоремир Білий">Зоремир Білий</option>
                <option value="Трояна Тоцька">Трояна Тоцька</option>
                <option value="Курач Водограй">Курач Водограй</option>
                <option value="Драк Йошка">Драк Йошка</option>
                <option value="Крамар Флор">Крамар Флор</option>
            </select>
            <input type="email" name="email" id="email" placeholder="Ваш e-mail (обов’язково)" maxlength="50" required>
            <input type="number" name="phone" id="phone" placeholder="Номер телефону" maxlength="13" >
            <input type="text" name="name" id="name" placeholder="Прізвище, Ім’я (обов’язково)" maxlength="30" required>
            <input type="submit" value="Надіслати" class="send">
        </form>
        <img src="img-proclub/t1.png" class="img-t1">
        <img src="img-proclub/t2.png" class="img-t2">
        <img src="img-proclub/t3.png" class="img-t3">
        <img src="img-proclub/t4.png" class="img-t4">
        <img src="img-proclub/t5.png" class="img-t5">
        <img src="img-proclub/t6.png" class="img-t6">

            </div>
    








            <footer class="footer">
        <nav>
        <div class="footer-content">
            <ul class="list-fw">
                <li class="scoba-footer">[</li>
                <li class="name-footer">ГРАФІК РОБОТИ</li>
                <li class="scoba-footer">]</li>
            </ul>
        
            <ul class="list-day">
                <li>Понеділок: 8:00-20:00</li>
                <li>Вівторок: 8:00-20:00</li>
                <li>Середа: 8:00-20:00</li>
                <li>Четвер: 8:00-20:00</li>
                <li>П’ятниця: 8:00-20:00</li>
                <li>Субота, Неділя: 9:00-18:00</li>
            </ul>

            <ul class="list-kon">
                <li class="scoba-footer">[</li>
                <li class="name-footer">КОНТАКТИ</li>
                <li class="scoba-footer">]</li>
            </ul>
        
            <ul class="list-kontakt">
                <li>м. Чернівці, вул. Банкова, 1</li>
                <li>Phone: 095 611 93 50</li>
                <li>Mail: refidSC@gmail.com</li>
                <li>Instagram: @refid_SC </li>
            </ul>

            <ul class="list-osn">
                <li class="scoba-footer">[</li>
                <li class="name-footer">ОСНОВНЕ</li>
                <li class="scoba-footer">]</li>
            </ul>
        
            <ul class="list-osnova">
                <li><a href="pro club.php">Про клуб</a></li>
                <li><a href="rozklad.php">Розклад</a></li>
                <li><a href="cinu.php">Ціни</a></li>
                <li><a href="news.php">Новини</a></li>
                <li><a href="poslygu.php">Послуги</a></li>
            </ul>
            <ul class="img">
                <ul><a href="index.php"><img src="img/Logo club (1).png" class="img-footer"></a></ul>
            </ul>
        </div>
        <div class="line-footer"></div>
    </nav>
    </footer>
</div>
</body>
</html>