<?php
$Con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];
    
    $isValid = true;
    $errorMessage = "";

    // Validate UserName
    if(strlen($Name) < 5 || strlen($Name) > 15 || !preg_match('/^[a-zA-Z0-9]+$/', $Name)){
        $isValid = false;
        $errorMessage .= "Неправильне Ім'я<br>";
    }

    // Validate Email
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        $errorMessage .= "Неправильний Email<br>";
    }

    // Validate Number
    if(!preg_match('/^\+380-\d{2}-\d{3}-\d{4}$/', $Number)){
        $isValid = false;
        $errorMessage .= "Неправильний Номер<br>";
    }

    // Validate Password
    if(strlen($Password) < 6 || strlen($Password) > 12 || !preg_match('/^[a-zA-Z0-9]+$/', $Password)){
        $isValid = false;
        $errorMessage .= "Неправильний Пароль<br>";
    }

    if(!$isValid){
        echo "
        <script>
        alert('$errorMessage');
        window.location.href = 'register.php';
        </script>
        ";
    }else{
        $Dup_Email = mysqli_query($Con, "SELECT * FROM tbluser WHERE Email = '$Email' ");
        $Dup_UserName = mysqli_query($Con, "SELECT * FROM tbluser WHERE UserName = '$Name' ");
        $Dup_Number = mysqli_query($Con, "SELECT * FROM tbluser WHERE Number = '$Number' ");

        if(mysqli_num_rows($Dup_Email)) {
            echo "
            <script>
            alert('Цей Email вже використовується');
            window.location.href = 'register.php';
            </script>
            ";
        }elseif(mysqli_num_rows($Dup_UserName)) {
            echo "
            <script>
            alert('Це Імя вже використовується');
            window.location.href = 'register.php';
            </script>
            ";
        }elseif(mysqli_num_rows($Dup_Number)) {
            echo "
            <script>
            alert('Цей Номер вже використовується');
            window.location.href = 'register.php';
            </script>
            ";
        }else{
            mysqli_query($Con, "INSERT INTO tbluser(UserName, Email, Number, Password) 
            VALUES ('$Name','$Email','$Number','$Password')");

            echo "
            <script>
            alert('Ви успішно зареєстровані');
            window.location.href = 'login.php';
            </script>
            ";
        }
    }
}
?>
