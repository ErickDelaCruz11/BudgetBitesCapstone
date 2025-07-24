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
          <li><a href="Omelette.php" class="capital">recipes</a></li>
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
          <button><a href="login.php" class="btn-1 pointer">Login</a></button>
          <button><a href="signup.php" class="btn-2 pointer">Sign up</a></button>
        </div>
      </nav>
     
    
    <!-- hero section ends here -->
    
    <!-- all recipe section starts here -->
    <section class="section-trend-recipe">
      <div class="flex-jcsb trending">
        <h2 class="capital pointer">All recipes</h2>
        
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

      <div class="flex-jcse card-div">
      <!-- card div 4 -->
      <div class="div-1 flex-jcsb">
          <!-- card 4 -->
          <div class="card pointer">
            <div class="card-div-1">
              <img
                src="images/main-bg-and-img/casserole.png"
                alt="Casserole"
              />
            </div>
            <div class="card-div-part-2">
              <div class="card-div-2 flex-jcse">
                <h2 class="name capital">Broccoli Chicken Casserole</h2>
                <button class="cal pointer capital">
                  <i class="fa-solid fa-fire"></i> 620 cal
                </button>
              </div>
              <p>
              A nice comfort food
                <a href="ChickenCasserole.php">read more</a>
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
