<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GIS</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION["username"] . "</h1>"; ?>
    <h1>Selamat Kamu Berhasil Login</h1>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>