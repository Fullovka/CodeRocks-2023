<?php

// Получаем значение email, которое было отправлено из формы восстановления пароля.
$email = $_POST["email"];

// Сгенерировать случайный токен для сброса пароля.
$token = bin2hex(random_bytes(32));

// Сохранить этот токен в базу данных вместе с email и временем создания.
$conn = mysqli_connect("localhost", "root", "", "password_reset_requests");
$email = mysqli_real_escape_string($conn, $email);
$sql = "INSERT INTO password_reset_requests (email, token) VALUES ('$email', '$token')";
mysqli_query($conn, $sql);
mysqli_close($conn);

// Формируем ссылку для сброса пароля.
$resetLink = "http://localhost/resetPassword.php?email={$email}&token={$token}";

// Формируем тему письма
$subject = "Сброс пароля";

// Формируем текст письма с ссылкой для сброса пароля
$message = "Для сброса пароля перейдите по ссылке: $resetLink";

// Устанавливаем заголовки для письма
$headers = "From: Top6rust@mail.ru\r\n";
$headers .= "Reply-To: Top6rust@mail.ru\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

// Отправляем письмо
if (mail($email, $subject, $message, $headers)) {
    echo 'Письмо для восстановления пароля было отправлено на указанный адрес электронной почты.';
} else {
    echo 'Ошибка при отправке письма.';
}

?>
