<?php 
session_start();
include 'config.php';

$sql = "SELECT r.id, r.user_id, r.title, r.description, r.image_path, u.username
        FROM recipes r
        JOIN users u ON r.user_id = u.id
        ORDER BY r.created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Budget Bites</title>
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
      </ul>
      <div class="menu-bar">
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
      </div>
      <div class="head-btn-div">
        <?php if (isset($_SESSION['user_id'])): ?>
          <button><a href="logout.php" class="btn-1 pointer">Logout</a></button>
        <?php else: ?>
          <button><a href="login.php" class="btn-1 pointer">Login</a></button>
          <button><a href="signup.php" class="btn-2 pointer">Sign up</a></button>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <section class="section-trend-recipe">
    <div class="flex-jcsb trending">
      <h2 class="capital pointer">All recipes</h2>
    </div>

    <div class="flex-jcse card-div">
      <div class="div-1 flex-jcsb">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card pointer">
              <div class="card-div-1">
                <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Recipe Image" />
                <button class="save-btn">
                  <i class="fa-solid fa-bookmark"></i>
                </button>
              </div>
              <div class="card-div-part-2">
                <div class="card-div-2 flex-jcse">
                  <h2 class="name capital"><?php echo htmlspecialchars($row['title']); ?></h2>
                  <!-- calories placeholder; remove or populate if you add a calories column -->
                </div>
                <p>
                  <?php echo nl2br(htmlspecialchars(substr($row['description'], 0, 80))); ?>...
                  <a href="viewRecipe.php?id=<?php echo $row['id']; ?>">read more</a>
                </p>

                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === (int)$row['user_id']): ?>
                  <div class="recipe-actions">
                    <a href="editRecipe.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                    <a href="deleteRecipe.php?id=<?php echo $row['id']; ?>" class="btn-delete" 
                      onclick="return confirm('⚠️ WARNING: This will permanently delete the recipe. Are you sure you want to continue?');">
                      Delete
                    </a>
                  </div>
                <?php endif; ?>

                <div class="card-div-3 flex">
                  <div class="card-div-part flex-jcsb">
                    <div class="card-div-3-2">
                      <span class="star-rating flex">
                        <i class="fa-solid fa-star col-2"></i>
                        <i class="fa-solid fa-star col-2"></i>
                        <i class="fa-solid fa-star col-2"></i>
                        <i class="fa-solid fa-star col-2"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No recipes found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <footer>
    <div class="hr-div">
      <hr class="footer-hr" />
    </div>
    <div class="footer-main-div-2 flex-jcsb">
      <div class="footer-div flex-jcse capital">
        <p>&copy; 2024 recipe logo. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
