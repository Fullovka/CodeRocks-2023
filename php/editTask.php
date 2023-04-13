<?php

// Подключаемся к базе данных
$conn = mysqli_connect('localhost', 'root', '', 'tasks');

// Получаем значения полей из POST параметров
$Id = $_POST['taskId'];
$name = $_POST['name'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$budget = $_POST['budget'];
$category = $_POST['category'];

// Обновляем информацию о задании в базе данных
$sql = "UPDATE tasks SET name = '$name', description = '$description', deadline = '$deadline', budget = '$budget', category = '$category' WHERE id = $Id";
mysqli_query($conn, $sql);

// Закрываем соединение с базой данных
mysqli_close($conn);

// Перенаправляем пользователя на главную страницу
header('Location: index.php');
exit;

?>