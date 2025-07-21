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
          <button class="btn-1 pointer" onclick="loginError()">Login</button>
          <button class="btn-2 pointer" onclick="signupError()">Sign up</button>
        </div>
      </nav>
    
    <!-- Create Profile Section -->
    <section id="profile" class="container">
        <h2>Create Your Profile</h2>
        <div class="profile-form">
            <form action="update_profile.php" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your Password" required>
                <br>

                <button type="submit" class="btn" >Create Profile</button>
            </form>
        </div>
    </section>

    </div>
    
    <script src="script.js"></script>
  </body>