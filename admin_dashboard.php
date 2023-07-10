<?php
session_start();

if (!isset($_SESSION["email"]) || $_SESSION["usertype"] !== "admin") {
    header("Location: login.php");
    exit;
}

$email = $_SESSION["email"];

require_once 'conn.php';

$sql = "SELECT * FROM users where usertype='user'";
$result = $conn->query($sql);
$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Welcome, <?php echo $email; ?>!</h2>
    
    <h3>User Details</h3>
    <table>
        <tr>
            <th>Member ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['member_id']; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <button><a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a></button>
                    <button><a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php } ?>
    </table>
    
    <br>
    <button><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>
