<!-- util/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" text="text/css" href="util/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header>
        <div class="_container">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="regform.php">Форма добавления в черный список</a></li>
                    <li class="menu__item"><a href="blacklist-users.php">Черный список</a></li>
                </ul>
            </nav>
        </div>
    </header>