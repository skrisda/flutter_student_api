<?php
header('Content-Type: application/json');
include "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$age = (int) $_POST['age'];

$stmt = $db->prepare("INSERT INTO student (fname, lname, tel, age) VALUES (?, ?, ?, ?)");
$result = $stmt->execute([$fname, $lname, $tel, $age]);

echo json_encode([
    'success' => $result
]);