<?php
       include("includes/header.php");
?>
<script src="assets/js/login.js"></script>
<form id="login-form" action="" method="POST" style="margin: 0 auto;width: 400px;margin-top: 20px;">
  <div class="form-group">
    <div>
        <h2>Login</h2>
    </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <hr>
  <input type="submit" value="Login" class="btn btn-primary"/>
  <div style="
    text-align: center;
    margin-top: 30px;
">
        <span class="error hide" data-error="EMAIL_PASSWORD_INCORRECT" style="font-weight: 600;">Email or Password is Incorrect</span>
  </div>
  <hr>
   <div style="
    text-align: center;
    margin-top: 30px;
    font-family: 'Source Sans Pro', sans-serif;
">
        <div class="row" style="margin-bottom: 20px;">
                <h1 style="text-align: left;padding-left: 55px;">Seller</h1>
                <div class="col-md-8">
                      <span>email = johndoe@email.com</span>
                </div>
                <div class="col-x8">
                      <span>password = password</span>
                </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
                <h1 style="text-align: left; padding-left: 55px;">Buyer</h1>
                <div class="col-md-8">
                      <span>email = jasondoe@email.com</span>
                </div>
                <div class="col-x8">
                      <span>password = password</span>
                </div>
        </div>
   </div>
  
</form>
<?php
        include("includes/footer.php");
?>
