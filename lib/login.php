<?php 

    session_start();
    include "../function/connect.php";
    include "../function/validate.php";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) {
            header("Location: ../index.php?error=Username is required");
            exit();
        } else if (empty($password)) {
            header("Location: ../index.php?error=Password is required");
            exit();
        } else {
            $password = md5($password);
            $sql_check = "SELECT * from users where username='$username' and password='$password'";
            $result_check = mysqli_query($conn, $sql_check);

            if (mysqli_num_rows($result_check) == 1) {
                $row = mysqli_fetch_assoc($result_check); 
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];

                header("Location: ../home.php?success=Login successfully");
                exit();
            } else {
                header("Location: ../index.php?error=Login failed, username and password invalid");
                exit();
            }
        } 

    } else {
        header("Location: ../index.php");
        exit();
    }

?>