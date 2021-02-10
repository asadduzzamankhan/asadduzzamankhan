<?php
        $uid = @$_SESSION['uid'];
        if(isset($uid)) {
            $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE uid='$uid'");
            $user_details_row = mysqli_fetch_array($user_details_query);

        } else {

        }
?>
<!DOCTYPE HTML>
<html>
        <head>
                <title>Offer Ecommerce</title>
                <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

                <!-- Optional theme -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <link rel="stylesheet" href="assets/css/main.css"/>
        </head> 
        <body>
                <div class="container"> 
                       <br>
                        <?php
                                if(isset($_SESSION['uid'])) {
                        ?>
                          <div>
                                <?php
                                      if(isset($uid)) {
                                          ?><a class="btn btn-danger" href="logout.php">logout</a><?php

                                      } else {

                                      }
                                ?>
                        </div>
                        <h2><?= $user_details_row['first_name'] .' ' . $user_details_row['last_name'] . ' - <small>' . $user_details_row['uid'] . '</small>'; ?></h2>
                        <hr>
                        <?php
                                }
                        ?>
