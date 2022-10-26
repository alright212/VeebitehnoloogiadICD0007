<?php

require_once("phpfunctionsforbooks.php");
require_once("index.php");
$title = $_POST["title"];
$grade = $_POST["grade"];
$isRead = $_POST["isRead"];
//...

saveBooks($title, $grade, $isRead);

header("Location: /index.php");

