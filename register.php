<!DOCTYPE html>
<html>
<head>
<style>
.container {
    height: 400px;
    width: 600px;
  margin-bottom: 2rem;
}
form{
    display: flex;
    justify-content: space-evenly;
}
h2{
    margin-top: 2rem;
    text-align: center;
}
</style>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>User Registration</h2>
    <div class="container">
    <form  action="register_process.php" method="post">
        <div>
        <label for="member_id">Member ID:</label>
        <input type="text" name="member_id" id="member_id" autocomplete="off" required><br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" autocomplete="off" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" autocomplete="off" required><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="other" required>Other<br>
        </div>
        <div>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" autocomplete="off" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br>

        <label for="number">Phone Number:</label>
        <input type="tel" name="number" id="number" autocomplete="off" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br>


        <input class="btn btn-primary" type="submit" value="Register">
        </div>
    </form>
    </div>
</body>
</html>
