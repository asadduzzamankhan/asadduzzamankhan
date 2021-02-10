<?php
        include("config/config.php");
        include("includes/header.php");
?>
<script src="assets/js/time_counter.js"></script>
<br>
<div>
        <a href="home.php">Back</a>
</div>

<h2>Sent Offers</h2>
<hr>
<div class="row">
      <div class="col-md-12">
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Seller</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Offer Price</th>
                    <th>Offer Status</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                        $query = mysqli_query($con, "SELECT * FROM offers WHERE uid='$uid'");
                        while($row = mysqli_fetch_assoc($query)) {
                                $status = "";
                                if($row['end_date'] == "0000-00-00 00:00:00") {
                                        $status = "Pending";
                                } else {
                                        $status = "Approved";
                                }

                                $get_product_details_query = mysqli_query($con, "SELECT * FROM products WHERE item_id='$row[item_id]'");
                                $product_row = mysqli_fetch_array($get_product_details_query);
                                $get_user_details_query = mysqli_query($con, "SELECT * FROM users WHERE uid='$product_row[seller_uid]'");
                                $seller_user_row = mysqli_fetch_array($get_user_details_query);
                                ?>
                                <tr>
                                    <td><?= $seller_user_row['first_name'] . ' ' . $seller_user_row['last_name']; ?> 
                                    <td><?= $product_row['product_name']; ?></td>
                                    <td><?= "$" . $product_row['price']; ?></td>
                                    <td><?= "$" . $row['offer_price']; ?></td>
                                    <td><span class="text-warning"><?= $status; ?></span></td>
                                    <?php
                                           if($row['end_date'] !== "0000-00-00 00:00:00") {
                                    ?>
                                                 <td>
                                                        <span>Offer Expires In: <span countdown class="end_date timeline-text"><?= $row['end_date']; ?></span></span>
                                                 </td>
                                                <?php 
                                           } else {
                                           }
                                    ?>   

                                </tr>
                                <?php

                        }
                ?>
            </tbody>
        </table>
      </div>
</div>
<?php
        include("includes/footer.php");
?>
