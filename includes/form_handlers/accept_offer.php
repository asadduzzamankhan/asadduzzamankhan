<?php
        include("../../config/config.php");
        $offer_id = $_POST['offer_id']; 
        
        $date = date("Y-m-d H:i:s");

        $stop_date = new DateTime($date);
        $stop_date->modify('+1 day');
        $end_date =$stop_date->format('Y-m-d H:i:s');

        //update offer, add end date and start cronjob
        /*$todays_date = date("Y/m/d H:i:s");
        $end_date = date('Y/m/d H:i:s', strtotime($todays_date. ' + 1 days'));
        $end_date  = date("Y/m/d H:i:s", strtotime($end_date));
        
        $update_query = mysqli_query($con, "UPDATE offers SET end_date='$end_date' WHERE offer_id='$offer_id'");*/
        //$update_query = mysqli_query($con, "UPDATE offers SET end_date='$end_date' WHERE offer_id='$offer_id'");
        $update_query = mysqli_query($con, "UPDATE offers SET end_date='$end_date' WHERE offer_id='$offer_id'");


?>
