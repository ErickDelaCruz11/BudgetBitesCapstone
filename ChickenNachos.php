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
          <li><a href="#recipe" class="capital">recipes</a></li>
          <li><a href="#addRecipe" class="capital">add recipe</a></li>
          <li><a href="#tutorials" class="capital">tutorials</a></li>
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
            <h2 class="capital">Chicken Nachos</h2>
          </div>
          <p class="main-content-p">
          You can't never go wrong with nachos
        </p>
        </div>
        <div class="main-content-part-2 flex">
          <img src="images/main-bg-and-img/nachos.png" alt="content" />
        </div>
      </div>
    </header>
    <!-- hero section ends here -->
    <hr />

    <p class="main-content-p">
      <br><br>
        Ingredients:
        <br>
        4 boneless, skinless chicken breasts
        <br>
        2 Tbsp. taco seasoning
        <br>
        2 Tbsp. chili powder
        <br>
        1/4 cup olive oil
        <br>
        Kosher salt, to taste
        <br>
        1 (8-oz.) can tomato sauce
        <br>
        2 cups hot water
        <br>
        Several dashes hot sauce
        <br>
        Good tortilla chips
        <br>
        Cheddar jack cheese, freshly grated
        <br>
Optional: pico de gallo, sour cream, sliced black olives, sliced green onions, cilantro leaves, guacamole, etc.
        <br><br>
        </p>

    <p class="main-content-p">
      Instructions:
      <br>
      1.
Sprinkle both sides of the chicken breasts with the taco seasoning and chili powder. Rub in the seasonings as much as you can.
      <br>
2
Heat the oil in a heavy skillet over medium heat. Cook the chicken breasts on both sides until deep golden and totally done in the middle, about 4 minutes per side. Remove from the skillet and let rest for a few minutes.
      <br>
3
In the same skillet, whisk in the tomato sauce, hot water, and several dashes of hot sauce and bring to a gentle boil. Reduce the heat to low and keep warm. Taste and adjust the seasonings (you may need to add a little salt, depending on the taco seasoning you use).
      <br>
4
Shred the chicken using two forks, then transfer the shredded chicken to the sauce. Toss to coat it in the sauce. If the sauce is too thick, add a little more hot water and allow to simmer for a few minutes.
      <br>
5
To build the nachos, layer the chips, cheese, and shredded chicken on a heat-proof dish in several layers, ending with a small layer on top. Microwave the dish (or place it in a 350ºF oven if oven-proof) until the cheese is totally melted.
      <br>
6
Serve as is or add whatever extras you'd like! Dive into it immediately.
      <br><br>
        </p>
   
        <p class="main-content-p">
        Nutrition:
        <br>
Calories: 740cal | Carbohydrates: 20g | Protein: 10g | Fat: 20g | Saturated Fat: 10g | Cholesterol: 358mg | Sodium: 226mg | Potassium: 121mg | Sugar: 1g | Vitamin A: 830IU | Calcium: 49mg | Iron: 2mg
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
