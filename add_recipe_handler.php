<?php
// Handles insertion of a new recipe into the database.
session_start();
require 'config.php';

// Only logged in users can submit recipes
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Collect and sanitize form inputs
$title       = trim($_POST['title'] ?? '');
$description = trim($_POST['description'] ?? '');
$ingredients = trim($_POST['ingredients'] ?? '');
$steps       = trim($_POST['steps'] ?? '');
$user_id     = $_SESSION['user_id'];

// Validate required fields
if ($title === '' || $ingredients === '' || $steps === '') {
    // Minimal validation – could be expanded
    header('Location: addRecipe.php?error=Missing+required+fields');
    exit;
}

// Handle optional image upload
$image_path = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = __DIR__ . '/uploads';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $filename  = basename($_FILES['image']['name']);
    // Prefix with timestamp to avoid name collisions
    $targetFile = $uploadDir . '/' . time() . '_' . $filename;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // Store path relative to project for HTML use
        $image_path = 'uploads/' . basename($targetFile);
    }
}

// Insert recipe into database
$stmt = $conn->prepare('INSERT INTO recipes (user_id, title, description, ingredients, steps, image_path) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param('isssss', $user_id, $title, $description, $ingredients, $steps, $image_path);
$stmt->execute();
$stmt->close();
$conn->close();

header('Location: recipes.php');
exit;