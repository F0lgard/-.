<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/plashka.css">
    <link rel="stylesheet" href="css/rozklad.css">
    <title>Розклад</title>
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
    <div class="case-rozklad">
        <div class="fon-roz"></div>
        

        <ul class="name-case-r">
            <li class="scobaroz">[</li>
            <li class="name-rozklad">РОЗКЛАД</li>
            <li class="scobaroz">]</li>
        </ul>

        <div class="grid-container">
            <!-- Клітинки сітки -->
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <!-- Додайте решту клітинок сітки -->
          </div>

          <div class="day-fon-rozklad"></div>
          <span class="day1-rozklad">Понеділок</span>
          <span class="day2-rozklad">Вівторок</span>
          <span class="day3-rozklad">Середа</span>
          <span class="day4-rozklad">Четвер</span>
          <span class="day5-rozklad">П’ятниця</span>
          <span class="day6-rozklad">Субота</span>
          <span class="day7-rozklad">Неділя</span>  
          
          <div class="time-fon-rozklad"></div>
          <span class="time1">08 00</span>
          <span class="time2">09 00</span>
          <span class="time3">10 00</span>
          <span class="time4">11 00</span>
          <span class="time5">12 00</span>
          <span class="time6">13 00</span>
          <span class="time7">14 00</span>
          <span class="time8">15 00</span>
          <span class="time9">16 00</span>
          <span class="time10">17 00</span>
          <span class="time11">18 00</span>
          <span class="time12">19 00</span>
          <span class="time13">20 00</span>

    </div>

    <div class="case-opus">
        <div class="fon-opus"></div>
        <ul class="name-case-o">
            <li class="scobaop">[</li>
            <li class="name-opus">ОПИС</li>
            <li class="scobaop">]</li>
        </ul>

        <span class="info-opus">
            
Functional - високоінтенсивне тренування, яке спрямоване на побудову ідеального тіла. Обєднує в собі різноманітні та іноваційні напрямки фітнесу: TRX, Tabata, колове тренування, тренування на баланс та багато іншого. Сила, витривалість, краса та гарний настрій гарантовані. Виконується під драйвову музику та з різноманітним обладнанням. Тривалість 55 хвилин.
<br>Cycle інтенсивне заняття - на стаціонарних велотренажерах. розвіває силу, витривалість, тренує серцево-судину та дихальну системи. Тривалість 45 хвилин.
<br>Fitness - це активна фізична діяльність, спрямована на покращення загального здоров'я та фізичної форми. Це включає в себе різноманітні види вправ, такі як кардіо тренування, силові вправи, розтяжки та інші активності, які допомагають підтримувати тіло в формі. Фітнес є важливою складовою здорового способу життя і може бути приємним і ефективним способом тренування для кожного. Тривалість 45 хвилин.
<br>CrossFit - унікальна программа тренування, яка розвиває силу, витривалість,баланс та мобільність. Проводиться в залі кроссфіт, тривальсть 55 хв.
<br>Weightlifting - це інтенсивне тренування с важкими вантажами для розвитку сили, м'язів і витривалості. Тривалість 55 хв.
<br>Rehabilitation - це комплексний підхід для відновлення здоров'я і фізичної форми через спеціальні вправи та процедури, що допомагають позбутися від травм, покращити рухливість і повернутися до занять спортом.

        </span>


    </div>

    </main>

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
