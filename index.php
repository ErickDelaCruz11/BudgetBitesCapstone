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
          <button><a href="login.php" class="btn-1 pointer">Login</a></button>
          <button><a href="signup.php" class="btn-2 pointer">Sign up</a></button>
        </div>
      </nav>
      <div class="main-content flex-jcse">
        <div class="main-content-part-1">
          <div class="h2-div">
            <h2 class="capital">Taste More,</h2>
            <h2 class="capital">Spend <span class="col-2">Less</span></h2>
          </div>
          <p class="main-content-p">
            BudgetBites is a website/application designed to help college students or anyone under a budget cook affordable, nutritious meals while developing essential cooking skills. 
            This is a digital recipe book with community-driven features, allowing users to contribute their own recipes, learn through interactive tutorials, and plan meals efficiently
          </p>
          <br><br>
          <button><a href="recipes.php" class="main-btn pointer">View Recipes</a>
          </button>
        </div>
        <div class="main-content-part-2 flex">
          <img src="images/main-bg-and-img/food.png" alt="content" />
        </div>
      </div>
    </header>
    <!-- hero section ends here -->
    <hr />
    <!-- recipe sharing section starts here -->
    <section id="addRecipe" class="section-sharing flex-jcse">
      <div class="section-1 flex">
        <img
          src="images/main-bg-and-img/post recipe.png"
          alt="share your recipe"
        />
      </div>
      <div class="section-2 flex">
        <h2 class="capital">share your own <span class="col-2">recipes</span></h2>
        <p>
          Have some recipes of your own? Post and share your recipes with the community.
        </p>
        <!-- button -->
        <button><a href="addRecipe.php" class="main-btn pointer">Create New Recipe</a>
          </button>
      </div>
    </section>
    <!-- recipe sharing section ends here -->
    <hr />
    <!-- trending recipe section starts here -->
    <section class="section-trend-recipe">
      <div class="flex-jcsb trending">
        <h2 class="capital pointer">trending recipes</h2>
        
      </div>
      <!-- card division -->
      <div class="flex-jcse card-div">
        <!-- card div 1 -->
        <div class="div-1 flex-jcsb">
          <!-- card 1 -->
          <div class="card pointer">
            <div class="card-div-1">
              <img
                src="images/main-bg-and-img/omelet.png"
                alt="Omelette"
              />
            </div>
            <div class="card-div-part-2">
              <div class="card-div-2 flex-jcse">
                <h2 class="name capital">Standard Omelette</h2>
                <button class="cal pointer capital">
                  <i class="fa-solid fa-fire"></i> 228kcal
                </button>
              </div>
              <p>
              An easy dinner recipe and a great way to use leftovers
                <a href="Omelette.php">read more</a>
              </p>
              <div class="card-div-3 flex">
                <div class="card-div-part flex-jcsb">
                  <div class="card-div-3-1 flex">
                  </div>
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
          <!-- card 2 -->
          <div class="card pointer">
            <div class="card-div-1">
              <img
                src="images/main-bg-and-img/lemon.webp"
                alt="vada pav"
              />
              <button class="save-btn">
                <i class="fa-solid fa-bookmark"></i>
              </button>
            </div>
            <div class="card-div-part-2">
              <div class="card-div-2 flex-jcse">
                <h2 class="name capital">Lemon Pasta</h2>
                <button class="cal pointer capital">
                  <i class="fa-solid fa-fire"></i> 560 cal
                </button>
              </div>
              <p>
              You can't beat a one-pot pasta dinner
                <a href="Lemonpasta.php">read more</a>
              </p>
              <div class="card-div-3 flex">
                <div class="card-div-part flex-jcsb">
                  <div class="card-div-3-1 flex">
                  </div>
                  <div class="card-div-3-2">
                    <span class="star-rating flex">
                      <i class="fa-solid fa-star col-2"></i>
                      <i class="fa-solid fa-star col-2"></i>
                      <i class="fa-solid fa-star col-2"></i>
                      <i class="fa-solid fa-star col-2"></i>
                      <i class="fa-solid fa-star col-2"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- card 3 -->
          <div class="card pointer">
            <div class="card-div-1">
              <img
                src="images/main-bg-and-img/nachos.png"
                alt="Chicken Nachos"
              />
              <button class="save-btn">
                <i class="fa-solid fa-bookmark"></i>
              </button>
            </div>
            <div class="card-div-part-2">
              <div class="card-div-2 flex-jcse">
                <h2 class="name capital">Chicken Nachos</h2>
                <button class="cal pointer capital">
                  <i class="fa-solid fa-fire"></i> 740 cal
                </button>
              </div>
              <p>
                You can never go wrong with nachos <a href="ChickenNachos.php">read more</a>
              </p>
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
        </div>
        <!-- card div 2 -->
        <div class="div-2 flex-jcse">
        </div>
      </div>
    </section>
    <hr />
    


    <hr />
   
    
    <hr />
    
    <hr />
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
