<!-- users.php -->
<?php
$title = "Черный список пользователей";
include 'util/header.php';
?>
<div class="wrapper">
    <h1>Черный список</h1>
    <div class="_container">
        <div class="forms">
            <form class="form-add-user" action="regform.php">
                <button type="submit" class="button">Добавить пользователя</button>
            </form>
            <form class="form-search-user" action="blacklist-users.php" method="get">
                <div class="form-search-user__search-group search-group">
                    <div>
                        <p>Введите термин для поиска</p>
                        <input type="text" name="search_term">
                    </div>
                    <button type="submit" class="button">Поиск</button>
                </div>
            </form>
        </div>
        <?php
        require_once("util/config.php");

        // Обработка удаления записи из черного списка
        if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
            $id_to_delete = $_GET['id'];
            $deleteQuery = "DELETE FROM blacklist WHERE id = $id_to_delete";

            if ($mysqli->query($deleteQuery)) {
                header("Location: blacklist-users.php");
                exit();
            } else {
                echo "Ошибка при выполнении запроса: " . $mysqli->error;
            }
        }

        // Обработка поиска в черном списке
        if (!isset($_GET['search_term'])) {
            echo "<div class='search-terms-text'>Вы не задали условия поиска. Выводится полный список</div>";
            $query = "SELECT * FROM blacklist";
        } else {
            $search_term = addslashes($_GET['search_term']);
            trim($search_term);
            $query = "SELECT * FROM blacklist WHERE phone_number LIKE '%$search_term%' OR last_name LIKE '%$search_term%' OR first_name LIKE '%$search_term%' OR middle_name LIKE '%$search_term%' OR comment LIKE '%$search_term%' ORDER BY last_name";
        }

        $result = $mysqli->query($query);

        if (!$result) {
            echo "Ошибка обращения к базе данных: " . $mysqli->error;
        } else {
            echo "<table>
                <tr>
                    <th>№</th>
                    <th>Номер телефона</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Комментарий</th>
                    <th>Удаление</th>
                </tr>";

            $i = 0;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . ++$i . "</td>
                    <td>" . htmlspecialchars($row['phone_number']) . "</td>
                    <td>" . htmlspecialchars($row['last_name']) . "</td>
                    <td>" . htmlspecialchars($row['first_name']) . "</td>
                    <td>" . htmlspecialchars($row['middle_name']) . "</td>
                    <td>" . htmlspecialchars($row['comment']) . "</td>
                    <td><a href='deleteblacklist.php?action=delete&id={$row['id']}' onclick='return confirm(\"Вы уверены, что хотите удалить запись?\");'>Удалить</a></td>
                </tr>";
            }

            echo "</table>";
            $result->free();
        }

        $mysqli->close();
        ?>
        <form action="regform.php">
            <button type="submit" class="button">Добавить пользователя</button>
        </form>
    </div>
</div>
<?php include 'util/footer.php'; ?>