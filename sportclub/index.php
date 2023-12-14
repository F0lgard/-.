<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/plashka.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Головна</title>
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
    <div class="case-poslug">
        <div class="fon-poslug"></div>
        <div class="name-case">
            <span class="scoba1">[</span>
            <span class="scoba2">]</span>
            <span class="name-posl">ПОСЛУГИ</span>
        </div>
        <div class="posluga-fit">
           <div class="fon-p-fit"></div>
                <img src="img/2.jpg" class="img-fit" alt="fitness">
                    <span class="name-fit">FITNESS</span>
                        <div class="line1-fit"></div> 
                        <div class="line2-fit"></div> 
                            <div class="circle1"></div>
                            <span class="text-circle1">Здоров'я і енергія</span>
                            <div class="circle2"></div>
                            <span class="text-circle2">Сила і гнучкість</span>
                            <div class="circle3"></div>
                            <span class="text-circle3">Збалансований розвиток</span>
        </div>

        <div class="posluga-cyc">
            <div class="fon-p-cyc"></div>
                 <img src="img/3.jpg" class="img-cyc" alt="CYCLE">
                     <span class="name-cyc">CYCLE</span>
                         <div class="line1-cyc"></div> 
                         <div class="line2-cyc"></div> 
                             <div class="circle1-cyc"></div>
                             <span class="text-circle1-cyc">Безпечність тренувань</span>
                             <div class="circle2-cyc"></div>
                             <span class="text-circle2-cyc">Підвищення витривалості</span>
                             <div class="circle3-cyc"></div>
                             <span class="text-circle3-cyc">Швидкий результат</span>
         </div>

         <div class="posluga-cros">
            <div class="fon-p-cros"></div>
                 <img src="img/4.jpg" class="img-cros" alt="CROSSFIT">
                     <span class="name-cros">CROSSFIT</span>
                         <div class="line1-cros"></div> 
                         <div class="line2-cros"></div> 
                             <div class="circle1-cros"></div>
                             <span class="text-circle1-cros">Інтенсивний тренувальний підхід.</span>
                             <div class="circle2-cros"></div>
                             <span class="text-circle2-cros">Ефективний тренінг для всього тіла</span>
                             <div class="circle3-cros"></div>
                             <span class="text-circle3-cros">Спільнота та взаємна підтримка</span>
         </div>
        
        <div class="button-detail-posl">
            <a href="poslygu.php"> <button type="button" class="but-dtp">Детальніше</button></a>
        </div>
    </div>

    <div class="case-trener">
        <div class="fon-tr"></div>
            <div class="name-case-tr">
                <span class="scobatr1">[</span>
                <span class="scobatr2">]</span>
                <span class="name-tr">ТРЕНЕРИ</span>
            </div>
            <div class="line1-tr"></div>
            <div class="line2-tr"></div>

            <div class="trener1">
                <div class="fon-t1"></div>
                <img src="img/t1.png" class="img-t1">
                <span class="text1-t1">Ціна заняття - 200 грн</span>
                <span class="text2-t1">26 років</span>
                <span class="text3-t1">Фітнес-тренерка</span>
                <span class="text4-t1">Цецілія Зінько</span>

            </div>
        
            <div class="trener2">
                <div class="fon-t2"></div>
                <img src="img/t2.png" class="img-t2">
                <span class="text1-t2">Ціна заняття - 250 грн</span>
                <span class="text2-t2">29 років</span>
                <span class="text3-t2">Важко-атлет</span>
                <span class="text4-t2">Зоремир Білий</span>

            </div>

            <div class="trener3">
                <div class="fon-t3"></div>
                <img src="img/t3.png" class="img-t3">
                <span class="text1-t3">Ціна заняття - 200 грн</span>
                <span class="text2-t3">32 роки</span>
                <span class="text3-t3">FUNCTIONAL тренерка</span>
                <span class="text4-t3">Трояна Тоцька</span>

            </div>

        <div class="button-zapus-tren1">
            <a href="zapus.php"><button type="button" class="but-zt1">Записатися</button></a>
        </div>

        <div class="button-zapus-tren2">
            <a href="zapus.php"><button type="button" class="but-zt2">Записатися</button></a>
        </div>

        <div class="button-zapus-tren3">
            <a href="zapus.php"><button type="button" class="but-zt3">Записатися</button></a>
        </div>

    </div>
    
    <div class="case-abonement">
        <div class="fon-abon"></div>
        <div class="name-case-abon">
            <span class="scobaabon1">[</span>
            <span class="scobaabon2">]</span>
            <span class="name-abon">АБОНЕМЕНТИ</span>
        </div>

            <img src="img/GYM (2).png" class="img-gym">
            <img src="img/premium.png" class="img-premium">
            <img src="img/vip.png" class="img-vip">

        <div class="button-dt-abon">
                <a href="cinu.php"><button type="button" class="but-dtab">Детальніше</button></a>
        </div>

    </div>

    <div class="case-map">
        <div class="fon-map"></div>
        <div class="name-case-map">
            <span class="scobamap1">[</span>
            <span class="scobamap2">]</span>
            <span class="name-map">РОЗТАШУВАННЯ</span>
        </div>
        <div class="img-map js-map">
        
        </div>
        <span class="info-map">Вулиця Банкова, 1, Чернівці, Чернівецька область</span>
        
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5DjIPg19QsXtovXaqaHWx8flAiQIL0Qg&callback=initMap"></script>
<script src="js/map.js"></script>
</body>
</html>
