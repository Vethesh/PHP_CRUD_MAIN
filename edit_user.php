<?php
require_once 'conn.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];

            if (empty($firstname) || empty($lastname) || empty($gender) || empty($email)) {
                echo "<script>alert('All fields are required.'); window.location.href = 'register.php';</script>";
                exit;
            }

            $checkEmailSql = "SELECT * FROM users WHERE email = '$email' AND id != '$user_id'";
            $checkEmailResult = $conn->query($checkEmailSql);

            if ($checkEmailResult->num_rows > 0) {
                echo "<script>alert('Email already exists.'); window.location.href = 'register.php';</script>";
                exit;
            }

            $updateSql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', email = '$email' WHERE id = '$user_id'";
            if ($conn->query($updateSql) === TRUE) {
                echo "<script>alert('User details updated successfully.'); window.location.href = 'admin_dashboard.php';</script>";
        exit;
            } else {
                echo "Error updating user details: " . $conn->error;
            }
        }
    } else {
        echo "<script>alert('User not found.'); window.location.href = 'admin_dashboard.php';</script>";
        exit;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="POST">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo $user['firstname']; ?>" required><br><br>
        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?php echo $user['lastname']; ?>" required><br><br>
        <label>Gender:</label>
        <input type="text" name="gender" value="<?php echo $user['gender']; ?>" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
