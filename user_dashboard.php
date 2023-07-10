<?php
session_start();

if (!isset($_SESSION["email"]) || $_SESSION["usertype"] !== "user") {
    header("Location: login.php");
    exit;
}

$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $email; ?>!</h2>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>
