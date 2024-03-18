<!-- regblacklist.php -->
<?php
require_once("util/config.php");

// Получаем данные из формы (замените на свои данные)
$phone_number = addslashes($_POST['phone_number']);
$last_name = addslashes($_POST['last_name']);
$first_name = addslashes($_POST['first_name']);
$middle_name = addslashes($_POST['middle_name']);
$comment = addslashes($_POST['comment']);

// Запрос на добавление записи в черный список
$query = "INSERT INTO blacklist (phone_number, last_name, first_name, middle_name, comment) VALUES ('$phone_number', '$last_name', '$first_name', '$middle_name', '$comment')";

if ($mysqli->query($query)) {
    echo "Запись успешно добавлена в черный список.";
} else {
    echo "Ошибка при выполнении запроса: " . $mysqli->error;
}

$mysqli->close();
?>
