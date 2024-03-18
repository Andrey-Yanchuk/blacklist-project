<!-- database/config.php -->
<?php
$host = 'localhost';
$username = 'Alex';
$password = 'G04tKXMM1fU__K1N';
$database = 'blacklist';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
}
?>