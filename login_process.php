<?php
// Include the database connection file (conn.php)
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
        exit;
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        if (password_verify($password, $hashed_password)) {
            $usertype = $row["usertype"];

            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["usertype"] = $usertype;

            if ($usertype === "admin") {
                header("Location: admin_dashboard.php");
            } elseif ($usertype === "user") {
                header("Location: user_dashboard.php");
            }
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    $conn->close();
}
?>
