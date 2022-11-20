<?php 
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success'];?></p>
        <?php }; ?>
    <h1>
        Wellcome, <?php echo $_SESSION['name'];?>
    </h1>
    <a href="lib/logout.php">Logout</a>
    <a href="change_pass.php">Change password</a>
</body>
</html>
<?php } else {
    header("Location: index.php");
    exit();
}?>