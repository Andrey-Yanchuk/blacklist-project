<!-- deleteblacklist.php -->
<?php
require_once("util/config.php");

// Получаем ID записи для удаления (замените на свои данные)
$id_to_delete = $_GET['id'];

// Запрос на удаление записи из черного списка
$query = "DELETE FROM blacklist WHERE id = $id_to_delete";

if ($mysqli->query($query)) {
    echo "<html><head><meta http-equiv='refresh' content='3; url=blacklist-users.php'></head><body><p>Запись успешно удалена из черного списка.</p></body></html>";
} else {
    echo "Ошибка при выполнении запроса: " . $mysqli->error;
}

$mysqli->close();
?>