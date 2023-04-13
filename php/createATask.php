<?php

// Выполняем подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasks";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения с базой данных
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка данных, переданных из формы
if (isset($_POST["nameTask"]) && isset($_POST["descriptionTask"]) && isset($_POST["deadlineTask"]) && isset($_POST["budgetTask"]) && isset($_POST["categoryTask"])) {
    
    // Защита от SQL-инъекций с помощью функции "mysqli_real_escape_string"
    
    $nameTask = mysqli_real_escape_string($conn, $_POST["nameTask"]);
    $descriptionTask = mysqli_real_escape_string($conn, $_POST["descriptionTask"]);
    $deadlineTask = mysqli_real_escape_string($conn, $_POST["deadlineTask"]);
    $budgetTask = mysqli_real_escape_string($conn, $_POST["budgetTask"]);
    $categoryTask = mysqli_real_escape_string($conn, $_POST["categoryTask"]);

    // Выполняем запрос на добавление данных в таблицу "tasks"
    $sql = "INSERT INTO tasks (name, description, deadline, budget, category) VALUES ('$nameTask', '$descriptionTask', '$deadlineTask', '$budgetTask', '$categoryTask')";
    if (mysqli_query($conn, $sql)) {
        echo "Задание успешно добавлено! Через 5 секунд вы будете перенаправлены на страницу списка заданий!"; ?>

        <script>
            setTimeout(function(){
                window.location.href = "/listOfServices.php";
            }, 5000);
        </script>

            <?php
        } else {
            echo "Ошибка при добавлении задания: " . mysqli_error($conn);
        }

    }

// Закрываем соединение с базой данных
mysqli_close($conn);
    
?>

