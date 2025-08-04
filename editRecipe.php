<?php
session_start();
include 'config.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if ID is passed
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Invalid recipe ID.";
    exit();
}

$recipe_id = intval($_GET['id']);
$error = "";

// Handle update on POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $newImageUploaded = !empty($_FILES['image']['name']);

    if ($title && $description) {
        if ($newImageUploaded) {
            $targetDir = "uploads/";
            $filename = basename($_FILES["image"]["name"]);
            $targetFile = $targetDir . uniqid() . "_" . $filename;
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
        }

        if ($newImageUploaded) {
            $stmt = $conn->prepare("UPDATE recipes SET title = ?, description = ?, image_path = ? WHERE id = ?");
            $stmt->bind_param("sssi", $title, $description, $targetFile, $recipe_id);
        } else {
            $stmt = $conn->prepare("UPDATE recipes SET title = ?, description = ? WHERE id = ?");
            $stmt->bind_param("ssi", $title, $description, $recipe_id);
        }

        if ($stmt->execute()) {
            header("Location: recipes.php");
            exit();
        } else {
            $error = "Failed to update recipe.";
        }
        $stmt->close();
    } else {
        $error = "Title and description are required.";
    }
}

// Fetch existing recipe
$stmt = $conn->prepare("SELECT * FROM recipes WHERE id = ?");
$stmt->bind_param("i", $recipe_id);
$stmt->execute();
$result = $stmt->get_result();
$recipe = $result->fetch_assoc();
$stmt->close();

if (!$recipe) {
    echo "Recipe not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Recipe</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <section class="container">
    <h2>Edit Recipe</h2>

    <?php if ($error): ?>
      <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
      <label for="title">Title:</label><br />
      <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($recipe['title']); ?>" required /><br />

      <label for="description">Description:</label><br />
      <textarea name="description" id="description" rows="5" required><?php echo htmlspecialchars($recipe['description']); ?></textarea><br />

      <p>Current Image:</p>
      <img src="<?php echo htmlspecialchars($recipe['image_path']); ?>" width="150" /><br /><br />

      <label for="image">Replace Image (optional):</label><br />
      <input type="file" name="image" id="image" accept="image/*" /><br />

      <button type="submit" class="btn">Update Recipe</button>
    </form>
    <br />
    <a href="recipes.php" class="btn">Cancel</a>
  </section>
</body>
</html>
