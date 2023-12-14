<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/plashka.css">
    <link rel="stylesheet" href="css/weightlifting.css">
    <title>WEIGHTLIFTING</title>
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
        <div class="case-poslygu">
            <div class="fon-pos"></div>
            <ul class="name-case-p">
                <li class="scobap">[</li>
                <li class="name-pos">WEIGHTLIFTING</li>
                <li class="scobap">]</li>
            </ul>

        <span class="text-c">
        Weightlifting, або жимовий спорт, є виглядом фізичної активності, що включає підйом важких навантажень для розвитку сили та маси м'язів. Це тренування допомагає зміцнити м'язову тканину, підвищити загальну фізичну силу, збільшити м'язову масу і покращити зовнішній вигляд. Однак, важкоатлетика також має свої ризики, оскільки неправильна техніка може призвести до травм, тому необхідно виконувати вправи з уважністю та під керівництвом досвідченого тренера. Вагові тренування підходять тим, хто має цікавість до розвитку сили та м'язової маси, але перед початком рекомендується проконсультуватися з лікарем та тренером для безпеки і досягнення кращих результатів.
        </span>
        <img src="img/anastase-maragos-7kEpUPB8vNk-unsplash.jpg" class="img-c" alt="cycle">
 

</div>






            <div class="zapus">
            
            <ul class="name-case-zap">
                <li class="scobazap">[</li>
                <li class="name-zap">ЗАПИС</li>
                <li class="scobazap">]</li>
            </ul>
            <form action="process_form2.php" method="POST">
            <div class="input-container">
                <input type="text" id="name" name="name" required placeholder="Прізвище, Ім’я (обов’язково)">
              </div>
            <div class="input-container-em">
                <input type="email" id="email" name="email" required placeholder="Ваш e-mail (обов’язково)">
              </div>
            <div class="input-container-num">
                <input type="tel" id="phone" name="phone" required placeholder="Номер телефону (обов’язково)">
              </div>
              <button type="submit" class="nadislatu">Надіслати</button> 
</form>
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