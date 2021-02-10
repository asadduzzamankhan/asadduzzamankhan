<?php
        include("../../config/config.php");
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $errors = [];

        $query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");

        $num_rows = mysqli_num_rows($query);
        if($num_rows == 1) {
                $row = mysqli_fetch_array($query);
                $_SESSION['uid'] = $row['uid'];
                echo 1;
        } else {
                return "EMAIL_PASSWORD_INCORRECT"; 
        }
?>
