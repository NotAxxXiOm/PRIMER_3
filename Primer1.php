<?php
$username = $_POST['username'];
$password = $_POST['password'];
// Отправляем запрос на сервер для проверки логина и пароля
$response = file_get_contents("http://example.com/login.php?username=$username&password=$password");
if ($response == "SUCCESS") {
    echo "Вы успешно вошли в систему!";
} else {
    echo "Неверное имя пользователя или пароль.";	}
?>
