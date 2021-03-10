<?php
header('Content-Type: application/json');
include "db.php";

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$age = (int) $_POST['age'];

$stmt = $db->prepare("UPDATE student SET fname = ?, lname = ?, tel = ?, age = ? WHERE id = ?");
$result =  $stmt->execute([$fname, $lname, $tel, $age, $id]);

echo json_encode([
    'success' => $result
]);