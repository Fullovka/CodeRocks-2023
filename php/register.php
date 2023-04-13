<?php

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

// Обработка переданных из формы регистрации данных
if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["password"]) && isset($_POST["repeatPassword"]) && isset($_POST["userType"])) {
    
    // Защита от SQL-инъекций с помощью функции "mysqli_real_escape_string"
    
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $surname = mysqli_real_escape_string($link, $_POST["surname"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $telephone = mysqli_real_escape_string($link, $_POST["telephone"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);
    $repeatPassword = mysqli_real_escape_string($link, $_POST["repeatPassword"]);
    $userType = mysqli_real_escape_string($link, $_POST["userType"]);

    // Выполняем проверка на наличие одинакового email-адреса в базе данных
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Пользователь с таким email уже зарегистрирован";
    } else {
        // Выполняем проверка на совпадение введенных паролей
        if ($password != $repeatPassword) {
            echo "Пароли не совпадают";
        } else {
            // Выполняем хэширование пароля
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Производим добавление пользователя в базу данных
            $query = "INSERT INTO users (name, surname, email, telephone, password, user_type) VALUES ('$name', '$surname', '$email', '$telephone', '$hashed_password', '$userType')";
            if (mysqli_query($link, $query)) {
                echo "Аккаунт успешно зарегистрирован! Через 5 секунд вы будете перенаправлены на страницу авторизации!"; ?>

                <script>
                    setTimeout(function(){
                    window.location.href = "../authorization.php";
                }, 5000);
                </script>

                <?php
            } else {
                echo "Ошибка при добавлении пользователя: " . mysqli_error($link);
            }
        }
    }
}

// Производим закрытие соединения с базой данных
mysqli_close($link);

?> 

