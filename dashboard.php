<?php
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    die("Access denied.");
}

require 'db.php';

// Fetch counts
$userCount = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];
$recipeCount = $conn->query("SELECT COUNT(*) AS total FROM recipes")->fetch_assoc()['total'];

// Fetch data
$users = $conn->query("SELECT id, username FROM users");
$recipes = $conn->query("SELECT id, title FROM recipes");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Total Users: <?= $userCount ?></p>
    <p>Total Recipes: <?= $recipeCount ?></p>

    <h2>Users</h2>
    <ul>
        <?php while ($user = $users->fetch_assoc()): ?>
            <li>
                <?= htmlspecialchars($user['username']) ?>
                <a href="delete.php?type=user&id=<?= $user['id'] ?>" onclick="return confirm('Delete user?')">Delete</a>
            </li>
        <?php endwhile; ?>
    </ul>

    <h2>Recipes</h2>
    <ul>
        <?php while ($recipe = $recipes->fetch_assoc()): ?>
            <li>
                <?= htmlspecialchars($recipe['title']) ?>
                <a href="delete.php?type=recipe&id=<?= $recipe['id'] ?>" onclick="return confirm('Delete recipe?')">Delete</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
