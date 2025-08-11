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
            <h2 class="capital">Standard Omelette</h2>
          </div>
          <p class="main-content-p">
          An easy dinner recipe and a great way to use leftovers
        </p>
        </div>
        <div class="main-content-part-2 flex">
          <img src="images/main-bg-and-img/omelet.png" alt="content" />
        </div>
      </div>
    </header>
    <!-- hero section ends here -->
    <hr />

    <p class="main-content-p">
      <br><br>
        Ingredients:
        <br>
        ½ tablespoon butter
        <br>
        2 egg beaten
        <br>
        2 teaspoon water
        <br>
        salt
        <br>
        black pepper
        <br>
        fillings for omelets , such as sauteed mushrooms, shredded cheese, diced ham
        <br><br>
        </p>

    <p class="main-content-p">
      Instructions:
      <br>
    1. Heat a nonstick skillet. Melt butter in the bottom of the pan.
½ tablespoon butter
      <br>
2. In a small dish combine the eggs and water. Season to taste with salt and pepper.
2 egg,2 teaspoon water,salt,black pepper
      <br>
3. Pour the egg mixture into the hot pan, tilting to cover the entire pan. As the eggs begin to set, cover the pan and allow the eggs to steam cooked on top, about 2 to 3 minutes.
      <br>
4. Cover half the omelet with preferred filling. Fold the blank half over the filled half.
fillings for omelets
<br><br>
        </p>
   
        <p class="main-content-p">
        Nutrition:
        <br>
Calories: 228kcal | Carbohydrates: 1g | Protein: 11g | Fat: 20g | Saturated Fat: 10g | Cholesterol: 358mg | Sodium: 226mg | Potassium: 121mg | Sugar: 1g | Vitamin A: 830IU | Calcium: 49mg | Iron: 2mg
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
