<?php
session_start();
include 'config.php';

// Block unauthenticated access
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Validate recipe ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid recipe ID.";
    exit();
}

$recipe_id = intval($_GET['id']);


$stmt = $conn->prepare("DELETE FROM recipes WHERE id = ?");
$stmt->bind_param("i", $recipe_id);

if ($stmt->execute()) {
    header("Location: recipes.php");
    exit();
} else {
    echo "Failed to delete recipe.";
}

$stmt->close();
$conn->close();
?>
