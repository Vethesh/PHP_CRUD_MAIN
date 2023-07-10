<?php
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $member_id = $_POST["member_id"];
    $email = $_POST["email"];

    $checkQuery = "SELECT COUNT(*) as count FROM users WHERE member_id = '$member_id' OR email = '$email'";
    $result = $conn->query($checkQuery);
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "Member ID or email already exists.";
        exit;
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $number = $_POST["number"];
    $dob = $_POST["dob"];

    if (empty($member_id) || empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($confirm_password) || empty($number) || empty($dob)) {
        echo "All fields are required.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.location.href = 'register.php';</script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (member_id, firstname, lastname, gender, email, password, number, dob,usertype) VALUES ('$member_id', '$firstname', '$lastname', '$gender', '$email', '$hashed_password', '$number', '$dob','user')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User registration successful'); window.location.href = 'login.php';</script>";
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
