<?php

require_once("phpfunctionsforbooks.php");

$books = getEveryBook();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="book-list-page">
<div id="root">
    <nav>
        <div>
            <a href="index.php" id="book-list-link">Raamatud</a>
            <span>|</span>
            <a href="book-add.php" id="book-form-link">Lisa raamat</a>
            <span>|</span>
            <a href="author-list.php" id="author-list-link">Autorid</a>
            <span>|</span>
            <a href="author-add.php" id="author-form-link">Lisa autor</a>
        </div>
    </nav>
    <main>
        <br>
        <div id="author-list">
            <div class="header-a">Pealkiri</div>
            <div class="header-b">Autorid</div>
            <div class="header-hinne">Hinne</div>
            <div class="header-divider"></div>

            <?php foreach ($books as $each): ?>

                <div class="first">
                    <a><?= $each["title"] ?></a>

                </div>

                <div class="break"></div>

                <div>
                    <span class="filledStar">★</span>
                    <span class="filledStar">★</span>
                    <span class="filledStar">★</span>
                    <span class="emptyStar">★</span>
                    <span class="emptyStar">★</span>
                </div>

                <div class="break"></div>

            <?php endforeach; ?>

            <div class="break"></div>

        </div>
    </main>
    <footer>
        Glen Kink 2022
    </footer>
</div>
</body>
<!--...-->
</html>