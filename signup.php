<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="lib/register.php" method="post">
        <h2>SIGN UP</h2>

        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }; ?>
        
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password"><br>
        <label>Confirm password</label>
        <input type="password" name="confirm_password" placeholder="Enter confirm password"><br>
        <button type="submit">Sign Up</button>
        <div>
            Do you already have an account? <a href="index.php">Login here</a>
        </div>
    </form>
</body>
</html>