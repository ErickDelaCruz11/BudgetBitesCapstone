<?php
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    die("Access denied.");
}

require 'db.php';

$type = $_GET['type'];
$id = intval($_GET['id']);

if ($type === 'user') {
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
} elseif ($type === 'recipe') {
    $stmt = $conn->prepare("DELETE FROM recipes WHERE id = ?");
} else {
    die("Invalid type.");
}

$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

header("Location: dashboard.php");
exit;

