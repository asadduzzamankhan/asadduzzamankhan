<?php
        include("conifg/config.php");
        if(isset($_SESSION['uid'])) {
            header("location: home.php");
        } else {
            header("Location: login.php");
        }
?>
