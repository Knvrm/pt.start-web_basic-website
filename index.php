<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Манки Кинг - Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="pictures/logo.png">
    <style>
        .auth-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .auth-links {
            margin-top: 1.5rem;
        }
        .auth-links a {
            margin: 0 10px;
            padding: 8px 20px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="auth-container text-center">
            <h1 class="mb-4">Добро пожаловать в мир Манки Кинга!</h1>
            <div class="monkey-icon mb-4">
                <img src="pictures/monkey-icon.png" alt="Monkey King" style="width: 100px;">
            </div>
            
            <?php
            
            if (!isset($_COOKIE['User'])) {
                echo '<p class="lead">Чтобы увидеть историю великого Манки Кинга, вам необходимо авторизоваться</p>';
                echo '<div class="auth-links">';
                echo '<a href="registration.php">Регистрация</a>';
                echo '<a href="login.php">Вход</a>';
                echo '</div>';
            } else {
                // Если пользователь авторизован, перенаправляем на профиль
                header('Location: profile.php');
                exit;
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>