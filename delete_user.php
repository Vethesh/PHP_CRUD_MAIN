<?php
require_once 'conn.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User deleted successfully.'); window.location.href = 'admin_dashboard.php';</script>";
        exit;
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
