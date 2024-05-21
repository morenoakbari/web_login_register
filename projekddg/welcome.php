<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION["username"] . "</h1>"; ?>
    <h1>Selamat kamu berhasil login</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
