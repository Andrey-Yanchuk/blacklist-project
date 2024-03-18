<!-- reg.php -->
<?php
require_once("util/config.php");

$phone_number = addslashes($_POST['phone_number']);
$last_name = addslashes($_POST['last_name']);
$first_name = addslashes($_POST['first_name']);
$middle_name = addslashes($_POST['middle_name']);
$comment = addslashes($_POST['comment']);

if (!$phone_number || !$last_name || !$first_name || !$comment) {
    echo "<div class='search-terms-text'>Вы задали не все параметры!</div>";
    exit;
}

$created_at = date('Y-m-d H:i:s'); // Форматируем текущую дату и время

$query = "INSERT INTO `blacklist` (`phone_number`, `last_name`, `first_name`, `middle_name`, `comment`, `created_at`) 
VALUES ('$phone_number', '$last_name', '$first_name', '$middle_name', '$comment', '$created_at')";

if ($mysqli->query($query)) {
    echo "<html><head><meta http-equiv='refresh' content='3; url=blacklist-users.php'></head><body><p>Новая запись добавлена в черный список</p></body></html>";
} else {
    echo "Ошибка при выполнении запроса: " . $mysqli->error;
}

$mysqli->close();
