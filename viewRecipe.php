<?php
// Display a single recipe
session_start();
require 'config.php';

// Validate recipe ID
if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    die('Invalid recipe ID.');
}
$id = (int) $_GET['id'];

$stmt = $conn->prepare('SELECT r.*, u.username FROM recipes r JOIN users u ON r.user_id = u.id WHERE r.id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$recipe = $result->fetch_assoc();
$stmt->close();
if (!$recipe) {
    die('Recipe not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($recipe['title']); ?> - Budget Bites</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/a9da22d09f.js" crossorigin="anonymous"></script>
</head>
<body>
  <header id="home">
    <nav class="flex-jcse">
      <div class="header-div flex pointer">
        <img src="images/logoes/bb logo.jpg" alt="logo" />
        <h1 class="capital">Budget<span class="col-2">Bites</span></h1>
      </div>
      <ul class="nav-list">
        <li><a href="index.php" class="capital">Home</a></li>
        <li><a href="recipes.php" class="capital">Recipes</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="addRecipe.php" class="capital">Add Recipe</a></li>
        <?php endif; ?>
        <li><a href="#tutorials" class="capital">Tutorials</a></li>
      </ul>
      <div class="menu-bar">
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
      </div>
      <div class="head-btn-div">
        <?php if (isset($_SESSION['user_id'])): ?>
          <form action="logout.php" method="POST" style="display:inline;">
            <button type="submit" class="btn-1 pointer">Logout</button>
          </form>
        <?php else: ?>
          <button><a href="login.php" class="btn-1 pointer">Login</a></button>
          <button><a href="signup.php" class="btn-2 pointer">Sign up</a></button>
        <?php endif; ?>
      </div>
    </nav>
    <section class="container">
      <h2 class="capital"><?php echo htmlspecialchars($recipe['title']); ?></h2>
      <?php if (!empty($recipe['image_path'])): ?>
        <img src="<?php echo htmlspecialchars($recipe['image_path']); ?>" alt="Recipe Image" class="recipe-img-full" />
      <?php endif; ?>
      <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($recipe['description'])); ?></p>
      <p><strong>Ingredients:</strong><br><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
      <p><strong>Steps:</strong><br><?php echo nl2br(htmlspecialchars($recipe['steps'])); ?></p>
      <p><strong>Posted by:</strong> <?php echo htmlspecialchars($recipe['username']); ?></p>
    </section>
  </header>
  <script src="script.js"></script>
</body>
</html>