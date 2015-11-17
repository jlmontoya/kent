<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

<div class="panel panel-default mr-top-20">
  <div class="panel-heading">Sign Up</div>
  <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="customer/add_customer_svc.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="firstname" class="form-control input-lg" placeholder="Firstname" required="required" maxlength="60" type="text" name="firstname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="lastname" class="form-control input-lg" placeholder="Lastname" required="required" maxlength="60"type="text" name="lastname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="gender" class="form-control input-lg" placeholder="Gender" required="required" maxlength="60" type="text" name="gender">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="country" class="form-control input-lg" placeholder="Country" required="required" maxlength="60" type="text" name="country">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="address" class="form-control input-lg" placeholder="Address" required="required" maxlength="100" type="text" name="address">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="phonenumber" class="form-control input-lg" placeholder="Phone number" required="required" maxlength="60" type="text" name="phonenumber">
          </div>

          <div id="datetimepicker" class="input-group input-append date">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="dob" class="form-control input-lg" name="dob" placeholder="Date of birth" type="text"></input>
            <span class="input-group-addon add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar fa-2"></i>
            </span>
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-2"></i></span>
            <input id="email" class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="email" value="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password" class="form-control input-lg" placeholder="Password" required="required" maxlength="60" type="password" name="password">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" required="required" maxlength="60" type="password" name="password_confirmation">
          </div>
          <div class="form-group">
            <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Sign Up</button>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

  </div>

  <?php
  require($DOCUMENT_ROOT . "footer.inc.php");
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy'
      });
    </script>
  </body>
</html>
