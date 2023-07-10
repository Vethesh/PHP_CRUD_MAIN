<!DOCTYPE html>
<html>
<head>
<style>
.content{
  max-width: 500px;
  margin: auto;

}
.content .red{
    width: 20rem;
    margin-left: 5rem;
}
</style>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <label>Email:</label>
        <input class="red" type="email" name="email" required><br><br>
        <label>Password:</label>
        <input class="red" type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
