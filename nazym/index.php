<?php
session_start();

// Проверка существования ключа 'user' в массиве $_SESSION
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit(); // Не забывайте добавлять exit после редиректа
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
        // Проверка существования ключа 'message' в массиве $_SESSION
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            unset($_SESSION['message']); // Удаление сообщения после его отображения
        }
        ?>
    </form>

</body>

</html>