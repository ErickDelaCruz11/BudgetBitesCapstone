<?php
session_start();
include 'config.php';

// Must be logged in to update a recipe
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    // Validate required fields
    if (empty($title) || empty($description)) {
        die('Title and description are required.');
    }

    // Optional: handle image upload
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $filename = basename($_FILES['image']['name']);
        $targetFile = $uploadDir . time() . '_' . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile;
        } else {
            die('Image upload failed.');
        }
    }

    // Update query
    if ($imagePath) {
        $stmt = $conn->prepare("UPDATE recipes SET title = ?, description = ?, image_path = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $description, $imagePath, $id);
    } else {
        $stmt = $conn->prepare("UPDATE recipes SET title = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $description, $id);
    }

    if ($stmt->execute()) {
        header("Location: recipes.php");
        exit;
    } else {
        die("Error updating recipe: " . $conn->error);
    }
} else {
    die('Invalid request.');
}
?>
