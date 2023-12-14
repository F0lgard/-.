<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $headers = "From: refidsc@gmail.com\r\n";
  // Формування тіла повідомлення електронної пошти
  $to = 'refidsc@gmail.com'; // Замініть на власну адресу електронної пошти
  $subject = 'Запис на тренування (форма №2)';
  $message .= "Email: " . $email . "\n";
  $message .= "Телефон: " . $phone . "\n";
  $message .= "Прізвище, Ім'я: " . $name . "\n";
  

  // Надсилання електронної пошти
  if (mail($to, $subject, $message, $headers)) {
    echo "
      <script>
    
      window.location.href= 'index.php'
      </script>
    ";
  } else {
    echo 'Виникла помилка при надсиланні повідомлення.';
  }
}
?>
