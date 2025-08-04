<?php
// User login page. Performs authentication and displays login form.
session_start();
require 'config.php';

// If user is already logged in, redirect to recipes page
if (isset($_SESSION['user_id'])) {
    header('Location: recipes.php');
    exit;
}

$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email !== '' && $password !== '') {
        $stmt = $conn->prepare('SELECT id, username, password_hash FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id']  = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: recipes.php');
            exit;
        } else {
            $login_error = 'Incorrect email or password.';
        }
        $stmt->close();
    } else {
        $login_error = 'Please enter both email and password.';
    }
}
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
    
        <!-- Login Section -->
    <section id="profile" class="container">
        <h2>Log in</h2>
        <?php if ($login_error): ?>
            <p class="error-msg" style="color:red;"><?= htmlspecialchars($login_error) ?></p>
        <?php endif; ?>
        <div class="profile-form">
            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your Password" required>
                <br>
                <button type="submit" class="btn" >Log in</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </section>

    </div>
    
    <script src="script.js"></script>
  </body>