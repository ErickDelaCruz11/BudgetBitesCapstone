<?php

?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Budget Bites</title>
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
          <button class="btn-1 pointer" onclick="loginError()">Login</button>
          <button class="btn-2 pointer" onclick="signupError()">Sign up</button>
        </div>
      </nav>
      <div class="main-content flex-jcse">
        <div class="main-content-part-1">
          <div class="h2-div">
            <h2 class="capital">Lemon Pasta</h2>
          </div>
          <p class="main-content-p">
          You can't beat a one-pot pasta dinner
        </p>
        </div>
        <div class="main-content-part-2 flex">
          <img src="images/main-bg-and-img/lemon.webp" alt="content" />
        </div>
      </div>
    </header>
    <!-- hero section ends here -->
    <hr />

    <p class="main-content-p">
      <br><br>
        Ingredients:
        <br>
        2 Tbsp. olive oil
        <br>
        2 Tbsp. unsalted butter
        <br>
        4 garlic cloves, thinly sliced
        <br>
        1/4 tsp. red pepper flakes
        <br>
        1 lb. uncooked spaghetti
        <br>
        2 tsp. kosher salt
        <br>
        1/2 cup grated parmesan cheese, plus more for serving
        <br>
        2 Tbsp. fresh lemon zest
        <br>
        1/4 cup fresh lemon juice
        <br>
        1/4 cup chopped fresh basil, plus more for serving
        <br>
        Freshly ground black pepper, for serving
        <br><br>
        </p>

    <p class="main-content-p">
      Instructions:
      <br>
      1.
      Heat a large pot over medium heat; add the oil and butter. Allow the butter to foam, then add the garlic and red pepper flakes. Cook until fragrant, 1 minute.
      <br>
      2.
      Add the pasta, 6 cups of water, and salt to the pot and bring to a simmer. Reduce the heat to medium-low and continue simmering for 8 to 10 minutes, stirring frequently to prevent sticking, until the pasta is al dente.
      <br>
      3.
      Remove from the heat and stir in the parmesan, lemon zest, lemon juice, and basil. Serve topped with more parmesan, basil, and black pepper.
      <br><br>
        </p>
   
        <p class="main-content-p">
        Nutrition:
        <br>
Calories: 560cal | Carbohydrates: 20g | Protein: 3g | Fat: 20g | Saturated Fat: 10g | Cholesterol: 358mg | Sodium: 226mg | Potassium: 121mg | Sugar: 1g | Vitamin A: 830IU | Calcium: 49mg | Iron: 2mg
<br><br>        
</p>

<!-- footer starts here -->
    <footer>
     
      <div class="hr-div">
        <hr class="footer-hr" />
      </div>
      <div class="footer-main-div-2 flex-jcsb">
        <div class="footer-div flex-jcse capital">
          <p>&copy 2024 recipe logo. all rights reserved</p>
        </div>
        <div class="footer-contents flex-jcse"></div>
      </div>
    </footer>
    <!-- footer ends here -->
    <script src="script.js"></script>
  </body>
</html>
