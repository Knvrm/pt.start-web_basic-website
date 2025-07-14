<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Манки Кинг</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="pictures/logo.png">
</head>
<body class="bg-light">
    <header class="container-fluid bg-brown py-3">
        <div class="container d-flex align-items-center">
            <div class="logo"></div>
            <h1 class="ms-3 mb-0 text-white site-title">Манки Кинг</h1>
        </div>
    </header>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-4 text-brown fw-bold section-title">Регистрация</h2>
            </div>
        </div>
        
        <div class="row align-items-start g-4">
            <div class="col-lg-8 col-md-7">
                <form method='POST' action='/registration.php'>
                    <div class="row form_reg"><input class="form" type="email" name="email" placeholder="Email"></div>
                    <div class="row form_reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_red btn_reg" name="submit">Продолжить</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'mydb');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
}

$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось добавить пользователя";
}
?>