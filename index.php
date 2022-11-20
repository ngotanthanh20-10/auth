<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="lib/login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success'];?></p>
        <?php }; ?>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }; ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Login</button>
        <div>
            Do you have an account? <a href="signup.php">Register here</a>
        </div>
    </form>
</body>
</html>