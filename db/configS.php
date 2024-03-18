<!-- database/configS.php -->
<?php
$dbPath = 'F:/ospanel/domains/doisc/database/configS.php';

$sqlite = new SQLite3($dbPath);

if (!$sqlite) {
    die("Ошибка подключения к базе данных");
}
?>