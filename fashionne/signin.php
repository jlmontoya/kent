<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require("header.inc.php");
?>

  <div class="container">

<?php
  if($_GET["error"] == true) {
?>
  <div class="alert alert-warning alert-dismissible mr-top-20" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Invalid Username or Password.
  </div>
<?php } ?>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">

<div class="panel panel-default mr-top-20">
  <div class="panel-heading">Customer Sign In</div>
  <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="customer/authenticator.php" accept-charset="UTF-8">

          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-2"></i></span>
            <input id="username" class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="username" value="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password" class="form-control input-lg" placeholder="Password" required="required" maxlength="60" type="password" name="password">
          </div>
          <div class="form-group">
            <small>joseph@gmail.com/password</small>
            <button type="submit" id="btn-signin" class="btn btn-block btn-primary btn-lg">Sign In</button>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

  </div>

  <?php
  $pushdown="pushdown";
  require("footer.inc.php");
  ?>
  </body>
</html>
