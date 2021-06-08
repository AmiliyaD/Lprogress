<?php 
// ОБРАБАТЫВАЕМ ЗАПРОС ПОЛЬЗОВАТЕЛЯ
session_start();
include('pdo.php');



// переменные для post-запросов
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if ($name == '' || $email == '' || $phone == '') {
    $_SESSION['message'] = 'Не все поля заполнены!';
    header('Location: form.php');
}
else {
// добавляем их в базу
$data = getbase();
$ins = $data->query("INSERT INTO user_bid (user_bid.name, user_bid.email, user_bid.phone) VALUES ('$name', '$email', '$phone')");
if($ins) {
    $_SESSION['message'] = 'Ваши данные успешно отправлены!';
    header('Location: form.php');
}
var_dump($ins);
}
