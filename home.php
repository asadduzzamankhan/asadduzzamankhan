<?php
        include("config/config.php");
        include("includes/header.php");
?>
<br>
<div>
        <a href="your_offers.php">Sent Offers</a>
        <a href="received_offers.php">Received Offers</a>
</div>
<h2>Products</h2>
<hr>
<div class="row">
      <div class="col-md-12">
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Seller</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Show</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                        $query = mysqli_query($con, "SELECT * FROM products");
                        while($row = mysqli_fetch_assoc($query)) {
                                $get_user_details_query = mysqli_query($con, "SELECT * FROM users WHERE uid='$row[seller_uid]'");
                                $seller_user_row = mysqli_fetch_array($get_user_details_query);
                                ?>
                                <tr>
                                    <td><?= $seller_user_row['first_name'] . ' ' . $seller_user_row['last_name']; ?> 
                                    <td><?= $row['product_name']; ?></td>
                                    <td><?= "$" . $row['price']; ?></td>
                                     
                                    <td>
                                        <?php
                                                $check_if_offer_exists_query = mysqli_query($con, "SELECT * FROM offers WHERE item_id='$row[item_id]'");
                                                $offer_num_rows = mysqli_num_rows($check_if_offer_exists_query);
                                                if($offer_num_rows !== 0) {
                                                    echo "<span>Already Offered</span>";
                                                } else {
                                                    ?><a href="make_offer.php?item_id=<?= $row['item_id']; ?>"><button class="btn btn-primary">Make an Offer</button></a><?php
                                                }
                                        ?>
                                        
                                    </td>
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
