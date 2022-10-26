<?php

require_once 'connection.php';

$conn = getConnection();


$stmt = $conn->prepare(
    'INSERT INTO contact (name) VALUES (:name);');

$stmt->bindValue(':name', 'Jill');

$stmt->execute();

$lastInsertId = $conn->lastInsertId();

var_dump($lastInsertId);

$phones = ['1', '2', '3'];

$stmt = $conn->prepare(
    'INSERT INTO phone VALUES (:contact_id, :number);');

foreach ($phones as $phone) {
    $stmt->bindValue(':contact_id', $lastInsertId);
    $stmt->bindValue(':number', $phone);

    $stmt->execute();
}