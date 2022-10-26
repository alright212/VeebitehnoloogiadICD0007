<?php

const DATA_FILE = __DIR__ . '/authorsList.txt';
//...
function getEveryAuthor(): array
{

    $lines = file(DATA_FILE);
    $names = [];
    foreach ($lines as $line) {
        list($firstName, $lastName, $grade) = explode(', ', $line);
        $names[] = ["firstName" => urldecode($firstName), "lastName" => urldecode($lastName), "grade" => urldecode($grade)];
    }
    return $names;
}

function saveTheAuthor($firstName, $lastName, $grade)
{

    $line = urlencode($firstName)
        . ', ' . urlencode($lastName)
        . ', ' . urlencode($grade) . PHP_EOL;

    file_put_contents(DATA_FILE, $line, FILE_APPEND);
}