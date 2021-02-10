<?php
        include("../../config/config.php");
        $item_id     = $_POST['item_id'];
        $offer_id    = mt_rand();
        $offer_price = $_POST['offer_price'];
        $uid         = $_SESSION['uid'];

        $product_details_query = mysqli_query($con, "SELECT * FROM products WHERE item_id='$item_id'");
        $product_row = mysqli_fetch_array($product_details_query);

        $seller_uid = $product_row['seller_uid'];

        //Store offer
       $query = mysqli_query($con, "INSERT INTO `offers` (`id`, `item_id`, `offer_id`, `offer_price`, `end_date`, `uid`, `seller_uid`) VALUES ('', '$item_id', '$offer_id', '$offer_price', '', '$uid', '$seller_uid')");
?>
