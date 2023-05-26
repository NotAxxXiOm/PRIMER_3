<?php
$username = $_POST['username'];
$password = $_POST['password'];
// Отправляем защищенный запрос на сервер для проверки логина и пароля
$url = "https://example.com/login.php";
$data = array('username' => $username, 'password' => $password);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
    'ssl' => array(
        'verify_peer' => true,
        'verify_peer_name' => true,
    ),
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
if ($response == "SUCCESS") {
    echo "Вы успешно вошли в систему!";
} else {
    echo "Неверное имя пользователя или пароль.";
}
?>
