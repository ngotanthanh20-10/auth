<?php 

    session_start();
    include "../function/connect.php";
    include "../function/validate.php";

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['confirm_password'])) {
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        $name = validate($_POST['name']);
        $c_password = validate($_POST['confirm_password']);

        $user_data = 'username='.$username.'&name='.$name;

        if (empty($name)) {
            header("Location: ../signup.php?error=name is required&$user_data");
            exit();
        } else if (empty($username)) {
            header("Location: ../signup.php?error=Username is required&$user_data");
            exit();
        } else if (empty($password)) {
            header("Location: ../signup.php?error=Password is required&$user_data");
            exit();
        } else if (empty($c_password)) {
            header("Location: ../signup.php?error=Confirm password is required&$user_data");
            exit();
        } else if ($c_password != $password) {
            header("Location: ../signup.php?error=Confirm password is not map&$user_data");
            exit();
        } else {
            $password = md5($password);
            $sql_check = "SELECT * from users where username='$username' and password='$password'";
            $result_check = mysqli_query($conn, $sql_check);

            if (mysqli_num_rows($result_check) > 0) {
                header("Location: ../signup.php?error=The username is taken try another&$user_data");
                exit();
            } else {
                $sql = "INSERT INTO users(name, username, password) values('$name', '$username', '$password')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: ../index.php?success=Sign up successfuly");
                    exit();
                } else {
                    header("Location: ../signup.php?error=Sign up failed");
                    exit();
                }
            }
        } 

    } else {
        header("Location: ../signup.php");
        exit();
    }

?>