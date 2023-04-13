<?php

// Начинаем сессию
session_start();

// Выполняем подключение к базе данных
$host = "localhost"; // Адрес сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$db_name = "register"; // Название базы данных

$link = mysqli_connect($host, $username, $password, $db_name);

// Проверка соединения с базой данных
if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка переданных из формы авторизации данных
if (isset($_POST["email"]) && isset($_POST["password"])) {
    
    // Защита от SQL-инъекций с помощью функции "mysqli_real_escape_string"
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    // Выполняем поиск пользователя с указанным email-адресом в базе данных
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        // Если пользователь найден, проверяем соответствие введенного пароля
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user["password"])) {
            // Если пароль верен, то создаем сессию и перенаправляем пользователя на домашнюю страницу
            session_start();

            // Сохраняем имя и фамилию пользователя в переменных сессии
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_surname'] = $user['surname'];

            header("Location: /index.php");
            exit();
            
        } else {
            // Если пароль неверен, то выводим сообщение об ошибке
            echo "Неверный пароль!";
        }
    } else {
        // Если пользователь не найден, то выводим сообщение об ошибке
        echo "Пользователь с таким email не зарегистрирован!";
    }
}

// Производим закрытие соединения с базой данных
mysqli_close($link);

