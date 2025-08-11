<?php
// Sign up page for registering new users
session_start();
require 'config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 6) {
        // Check if email is already taken
        $stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $message = "Email already registered.";
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $insert = $conn->prepare('INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)');
            $insert->bind_param('sss', $username, $email, $password_hash);
            if ($insert->execute()) {
                // Auto-login after signup
                $_SESSION['user_id']  = $insert->insert_id;
                $_SESSION['username'] = $username;
                header('Location: recipes.php');
                exit;
            } else {
                $message = 'Error creating user.';
            }
            $insert->close();
        }
        $stmt->close();
    } else {
        $message = 'Please enter a valid username, email, and password (min 6 chars).';
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
        <li><a href="recipes.php" class="capital">recipes</a></li>
        <li><a href="addRecipe.php" class="capital">Add Recipe</a></li>
      </ul>
      <!-- menu bar -->
      <div class="menu-bar">
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
        <div class="menu-lines"></div>
      </div>
      <!-- styled login/signup buttons -->
      <div class="head-btn-div">
        <button class="btn-1 pointer"><a href="login.php">Login</a></button>
        <button class="btn-2 pointer"><a href="signup.php">Sign up</a></button>
      </div>
    </nav>

    <!-- Sign Up Section -->
    <section id="profile" class="container">
        <h2>Create Your Account</h2>
        <?php if ($message): ?>
            <p class="error-msg" style="color:red;"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
        <div class="profile-form">
          <form method="POST" action="signup.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Your Name" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Your Password" required>
            <br>
            <button type="submit" class="btn">Sign Up</button>
          </form>
        </div>
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </section>
  </header>

  <script src="script.js"></script>
</body>
