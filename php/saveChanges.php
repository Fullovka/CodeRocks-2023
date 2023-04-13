<?php

// Подключаемся к базе данных
$db = new mysqli('localhost', 'root', '', 'tasks');

// Получаем данные из запроса
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$budget = $_POST['budget'];
$category = $_POST['category'];

// Обновляем запись в таблице tasks
$query = "UPDATE tasks SET name='$name', description='$description', deadline='$deadline', budget='$budget', category='$category' WHERE id=$id";
$result = $db->query($query);

// Проверяем результат обновления
if ($result) {
  http_response_code(200); // Отправляем HTTP-статус 200 (OK)
} else {
  http_response_code(500); // Отправляем HTTP-статус 500 (Internal Server Error)
}

$db->close(); // Закрываем соединение с базой данных

?>
