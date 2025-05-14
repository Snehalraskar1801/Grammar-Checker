<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Grammar Checker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
  <a href="logout.php">Logout</a>

  <!-- Include grammar checker UI or redirect to your existing grammar page -->
  <iframe src="../grammar-checker/index.html" width="100%" height="600px" style="border:none;"></iframe>
</body>
</html>
