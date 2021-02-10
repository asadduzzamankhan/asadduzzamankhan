<?php
        include("config/config.php");
        include("includes/header.php");

        $item_id = $_GET['item_id'];

        $query = mysqli_query($con, "SELECT * FROM products WHERE item_id='$item_id'");
        $row = mysqli_fetch_array($query);
?>
    <h2>Make an offer on - <?= $row['product_name']; ?></h2>
<hr>
<script src="assets/js/offer.js"></script>
<div class="row" style="font-family: 'Source Sans Pro', sans-serif;">
      <div class="col-md-12">
                <form id="offer-form" action="" method="POST">
                  <h1><?= "$" . $row['price']; ?></h1>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Offer Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="offer_price" placeholder="Enter offer price">
                  </div>
                  <input type="submit" name="submit_offer" class="btn btn-primary" value="Submit"/>
                  <a href="home.php" class="btn btn-default">Back</a>
                  <input type="hidden" name="item_id" value="<?= $_GET['item_id']; ?>"/>
                </form>         
      </div>
</div>
<?php
        include("includes/footer.php");
?>

