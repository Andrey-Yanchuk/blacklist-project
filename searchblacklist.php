<!-- searchblacklist.php -->
<?php
require_once("util/config.php");

// Получаем данные для поиска (замените на свои данные)
$search_term = addslashes($_GET['search_term']);

// Запрос на поиск записей в черном списке
$query = "SELECT * FROM blacklist WHERE phone_number LIKE '%$search_term%' OR last_name LIKE '%$search_term%' OR first_name LIKE '%$search_term%' OR middle_name LIKE '%$search_term%' OR comment LIKE '%$search_term%'";

$result = $mysqli->query($query);

if (!$result) {
    echo "Ошибка обращения к базе данных: " . $mysqli->error;
} else {
    // Вывод результатов поиска
    while ($row = $result->fetch_assoc()) {
        // Ваш код для вывода результатов
        echo "Номер телефона: " . $row['phone_number'] . "<br>";
        echo "Фамилия: " . $row['last_name'] . "<br>";
        // ... остальные поля
    }

    $result->free();
}

$mysqli->close();
?>