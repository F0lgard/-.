<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/login.css">

  <title>Login</title>
</head>
<body>

<img src="../../img/vxidfon.png" class="vxid-fon">    

<div class="container">
<div class="row">
<div class="vxid">


<span class="text-vxid">ВХІД</span>
<form action="login1.php" method="POST">
    <div class="input-login">
        <input type="text" name="name" placeholder="Enter User Name" class="form-control" required>
    </div>
    
    <div class="input-pas">

        <input type="password" name="password" placeholder="Enter User Password" class="form-control" required>
    </div>
<div>
  <button class="vviytu">Вхід</button>
</div>
<div >
  <button class="zareg" name="submit" class="w-100 bg-warning fs-4 text-white"><a href="register.php" class="link-reg">РЕЄСТРАЦІЯ</a></button>
</div>
</form>

</div>
</div>
</div>
  
</body>
</html>
