<!-- regform.php -->
<?php
$title = "Добавить пользователя в черный список";
include 'util/header.php';
?>
<main class="main">
    <div class="wrapper">
        <h1>Форма добавления в черный список</h1>
        <div class="_container">
            <form action="reg.php" method="post" class="form">
                <div class="form__item">
                    <label for="phone_number">Номер телефона</label>
                    <input autocomplete="off" type="number" name="phone_number" maxlength="255" size="30" required placeholder="Введите номер телефона" class="input">
                </div>
                <div class="form__item">
                    <label for="last_name">Фамилия</label>
                    <input autocomplete="off" type="text" name="last_name" maxlength="255" size="30" required placeholder="Введите Фамилию" class="input">
                </div>
                <div class="form__item">
                    <label for="first_name">Имя</label>
                    <input autocomplete="off" type="text" name="first_name" maxlength="255" size="30" required placeholder="Введите Имя" class="input">
                </div>
                <div class="form__item">
                    <label for="middle_name">Отчество</label>
                    <input autocomplete="off" type="text" name="middle_name" maxlength="255" size="30" placeholder="Введите Отчество" class="input">
                </div>
                <div class="form__item">
                    <label for="comment">Комментарий</label>
                    <textarea name="comment" rows="4" cols="50" required placeholder="Введите комментарий" class="input"></textarea>
                </div>
                <div class="form__buttons">
                    <button type="submit" class="button">Добавить в черный список</button>
                    <button type="reset" class="button">Сбросить</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include 'util/footer.php'; ?>