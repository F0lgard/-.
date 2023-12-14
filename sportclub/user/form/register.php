<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/register.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery.inputmask.min.js"></script>

  <style>
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      height: 180px;
      background-color: #ffffff;
      border: 2px solid #000000;
      border-radius: 20px;
      text-align: center;
      margin-top: auto;
      z-index: 9999;
      font-family: 'Jura';
font-style: normal;
font-weight: 600;
font-size: 28px;
line-height: 33px;
color: #000000;

    }

    .popup h2 {
      margin-top: 25px;
    }

    .popup button {
width: 168px;
height: 43px;
margin-top: 30px;
background: #F00505;
border-radius: 10px;
font-family: 'Jura';
font-style: normal;
font-weight: 600;
font-size: 28px;
line-height: 33px;

color: #FFFFFF;

    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9998;
    }

    .span-per {
    color: #FFFFFF;
    font-size: 20px;
  }
  </style>
  <title>Register</title>
</head>
<body>

<img src="../../img/vxidfon.png" class="vxid-fon">    

<div class="container">
<div class="row">
<div class="vxid">


<span class="text-vxid">РЕЄСТРАЦІЯ</span>
<form action="insert.php" method="POST" onsubmit="return validateForm()">
    <div class="input-login">
        <input type="text" name="name" id="username" minlength="5" maxlength="15" placeholder="Enter User Name" class="form-control" required>
        <span id="username-status" class="span-per"></span>
    </div>
    <div class="input-email">
        <input type="email" name="email" id="email" placeholder="Enter User Email" class="form-control" required>
        <span id="email-status" class="span-per"></span>
    </div>
    <div class="input-num">
        <input type="text" name="number" id="number" class="form-control" required>
        <span id="number-status" class="span-per"></span>
    </div>
    <div class="input-pas">
        <input type="password" name="password" id="password" minlength="6" maxlength="12" placeholder="Enter User Password" class="form-control" required>
        <span id="password-status" class="span-per"></span>
    </div>
    <div>
      <button class="vviytu" name="submit" class="w-100 bg-warning fs-4 text-white">РЕЄСТРАЦІЯ</button>
    </div>
    <div>
      <button class="zareg"><a href="login.php" class="link-log">Вхід</a></button>
    </div>
</form>

<div id="popup-success" class="popup" style="display: none;">
  <h2>Ви успішно зареєстровані</h2>
  <button onclick="closePopup('popup-success')">Закрити</button>
</div>

<div id="popup-error" class="popup" style="display: none;">
  <h2>Помилка в заповненні форми</h2>
  <button onclick="closePopup('popup-error')">Закрити</button>
</div>

<div id="overlay" class="overlay" style="display: none;"></div>

<script>
  $(document).ready(function() {
    $('#number').inputmask("+380-99-999-9999");

    
  });

  function validateForm() {
    var usernameInput = document.getElementById('username');
    var emailInput = document.getElementById('email');
    var numberInput = document.getElementById('number');
    var passwordInput = document.getElementById('password');

    var usernameStatus = document.getElementById('username-status');
    var emailStatus = document.getElementById('email-status');
    var numberStatus = document.getElementById('number-status');
    var passwordStatus = document.getElementById('password-status');

    var isValid = true;

    // Validate UserName
    var username = usernameInput.value.trim();
    if (username.length < 5 || username.length > 15 || !/^[a-zA-Z0-9]+$/.test(username)) {
      usernameStatus.textContent = 'Помилка';
      isValid = false;
    } else {
      usernameStatus.textContent = 'Вірно';
    }

    // Validate Email
    var email = emailInput.value.trim();
    if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
      emailStatus.textContent = 'Помилка';
      isValid = false;
    } else {
      emailStatus.textContent = 'Вірно';
    }

    // Validate Number
    var number = numberInput.value.trim();
    if (!/^(\+380-)\d{2}-\d{3}-\d{4}$/.test(number)) {
      numberStatus.textContent = 'Помилка';
      isValid = false;
    } else {
      numberStatus.textContent = 'Вірно';
    }

    // Validate Password
    var password = passwordInput.value.trim();
    if (password.length < 6 || password.length > 12 || !/^[a-zA-Z0-9]+$/.test(password)) {
      passwordStatus.textContent = 'Помилка';
      isValid = false;
    } else {
      passwordStatus.textContent = 'Вірно';
    }

    if (!isValid) {
      openPopup('popup-error');
    }

    return isValid;
  }

  function openPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
  }

  function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }
</script>

</div>
</div>
</div>
  
</body>
</html>
