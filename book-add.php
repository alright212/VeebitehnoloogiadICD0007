<?php
require_once("phpfunctionsforbooks.php");

$title = "";
$grade = "";
$isRead = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="book-form-page">
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
        <form id="input-form" action="booksubmit.php" method="post">
            <div class="label-cell">
                <label for="title">Pealkiri: </label>
            </div>
            <div class="input-cell">
                <input id="title" name="title" type='text' value="<?= $title ?>">
            </div>

            <div class="break"></div>
            <div class="label-cell"><label>Lisa autor: </label></div>
            <div class="input-cell">
                <label>
                    <select>
                        <option></option>
                        <option value="1">George R. R. Martin</option>
                        <option value="2">J. R. R. Tolkien</option>
                        <option value="3">J. K. Rowling</option>
                        <option value="4">Stephen King</option>
                        <option value="5">Dan Brown</option>
                        <option value="6">J. D. Salinger</option>
                    </select>
                </label>
            </div>
            <div class="break"></div>
            <div class="label-cell">Hinne:</div>
            <div class="input-cell">
                <label>
                    <input type="radio" name="grade" value="1"> 1
                </label>
                <label>
                    <input type="radio" name="grade" value="2"> 2
                </label>
                <label>
                    <!--...-->
                    <input type="radio" name="grade" value="3"> 3
                </label>
                <label>
                    <input type="radio" name="grade" value="4"> 4
                </label>
                <label>
                    <input type="radio" name="grade" value="5"> 5
                </label>
            </div>
            <div class="break"></div>
            <div class="label-cell"><label>Loetud:</label></div>
            <div class="input-cell"><label>
                    <input id="isRead" name="isRead" type="checkbox"/>
                </label></div>
            <div class="break"></div>
            <div class="label-cell"></div>
            <div class="input-cell">
                <input name="submitButton" type="submit" class="button" value="Salvesta">
            </div>
        </form>
    </main>
    <footer>
        Glen Kink 2022
    </footer>
</div>
</body>
</html>

