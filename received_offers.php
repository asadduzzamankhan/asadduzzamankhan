<?php
        include("config/config.php");
        include("includes/header.php");
?>
<script src="assets/js/offer.js"></script>
<script src="assets/js/time_counter.js"></script>
<br>
<div>
        <a href="home.php">Back</a>
</div>

<h2>Received Offers</h2>
<hr>
<div class="row">
      <div class="col-md-12">
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Offered By</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Offer Price</th>
                    <th>Offer Status</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                        $query = mysqli_query($con, "SELECT * FROM offers WHERE seller_uid='$uid'");
                        while($row = mysqli_fetch_assoc($query)) {
                            $get_product_details_query = mysqli_query($con, "SELECT * FROM products WHERE item_id='$row[item_id]'");
                                $product_row = mysqli_fetch_array($get_product_details_query);
                                $get_user_details_query = mysqli_query($con, "SELECT * FROM users WHERE uid='$row[uid]'");
                                $buyer_user_row = mysqli_fetch_array($get_user_details_query);
                                ?>
                                <tr>
                                    <td><?= $buyer_user_row['first_name'] . ' ' . $buyer_user_row['last_name']; ?> 
                                    <td><?= $product_row['product_name']; ?></td>
                                    <td><?= "$" . $product_row['price']; ?></td>
                                    <td><?= "$" . $row['offer_price']; ?></td>
                                    <td>
                                        <?php
                                           if($row['end_date'] !== "0000-00-00 00:00:00") {
                                               echo "<span class='text-success'>Approved</span>";
                                           
                                           } else {
                                             ?>
                                        <button class="btn btn-success accept-offer--btn" data-offer-id="<?= $row['offer_id']; ?>">Accept</button>    
                                            <?php
                                           }
                                        ?>   
                                 </td>
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
