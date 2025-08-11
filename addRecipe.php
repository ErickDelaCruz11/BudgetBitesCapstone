<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>


<?php
// addRecipe.php
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Budget Bites - Add Recipe</title>
  <link rel="stylesheet" href="style.css" />
  <script
    src="https://kit.fontawesome.com/a9da22d09f.js"
    crossorigin="anonymous"
  ></script>
</head>

<body>
  <!-- hero section starts here -->
  <header id="home">
    <!-- navigation bar -->
    <nav class="flex-jcse">
      <!-- logo -->
      <div class="header-div flex pointer">
        <img src="images/logoes/bb logo.jpg" alt="logo" />
        <h1 class="capital">Budget<span class="col-2">Bites</span></h1>
      </div>
      <!-- navigation -->
      <ul class="nav-list">
        <li><a href="index.php" class="capital">Home</a></li>
        <li><a href="recipes.php" class="capital">recipes</a></li>
        <li><a href="addRecipe.php" class="capital">Add Recipe</a></li>
      </ul>
      <!-- menu bar -->
      <div class="menu-bar">
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
      </div>
      <!-- buttons -->
      <div class="head-btn-div">
        <?php if (isset($_SESSION['user_id'])): ?>
          <form action="logout.php" method="POST" style="display:inline;">
            <button type="submit" class="btn-1 pointer">Logout</button>
          </form>
        <?php else: ?>
          <button class="btn-1 pointer" onclick="window.location.href='login.php'">Login</button>
          <button class="btn-2 pointer" onclick="window.location.href='signup.php'">Sign up</button>
        <?php endif; ?>
      </div>
    </nav>

    <!-- Add Recipe Section -->
    <section id="addRecipe" class="container">
      <h2 class="capital">Add a New Recipe</h2>
      <div class="profile-form">
        <form action="add_recipe_handler.php" method="POST" enctype="multipart/form-data">
          <label for="title">Recipe Title:</label>
          <input type="text" id="title" name="title" placeholder="Enter title" required>
          <br>

          <label for="description">Description:</label>
          <textarea id="description" name="description" placeholder="Enter a short description" required></textarea>
          <br>

          <label for="ingredients">Ingredients:</label>
          <textarea id="ingredients" name="ingredients" placeholder="List the ingredients" required></textarea>
          <br>

          <label for="steps">Steps:</label>
          <textarea id="steps" name="steps" placeholder="Describe the steps" required></textarea>
          <br>

          <label for="image">Image:</label>
          <input type="file" id="image" name="image" accept="image/*">
          <br>

          <button type="submit" class="btn">Add Recipe</button>
        </form>
      </div>
    </section>
  </header>

  <script src="script.js"></script>
</body>
