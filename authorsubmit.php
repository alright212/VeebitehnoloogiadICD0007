<?php
require_once("phpfunctionsforauthors.php");
require_once("author-list.php");
//:::

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$grade = $_POST["grade"];

saveTheAuthor($firstName, $lastName, $grade);

header("Location: /author-list.php");