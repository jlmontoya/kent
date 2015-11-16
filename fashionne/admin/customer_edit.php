<?php
  require_once('authenticate.php');
  include_once "connect.php";
  if( isset($_GET['edit']) ) {
    $id = $_GET['edit'];
    $result = $db->query("SELECT * FROM tbl_customer WHERE id='$id'");
    $row = mysqli_fetch_array($result);
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php
  require("header.admin.inc.php");
?>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

<div class="panel panel-default mr-top-20">
  <div class="panel-heading">Edit Customer</div>
  <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="customer_edit_svc.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="firstname" value="<?php echo $row['first_name']; ?>" class="form-control input-lg" placeholder="Firstname" required="required" maxlength="60" type="text" name="firstname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="lastname"  value="<?php echo $row['last_name']; ?>" class="form-control input-lg" placeholder="Lastname" required="required" maxlength="60"type="text" name="lastname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="gender"  value="<?php echo $row['gender']; ?>" class="form-control input-lg" placeholder="Gender" required="required" maxlength="60" type="text" name="gender">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="country"  value="<?php echo $row['country']; ?>" class="form-control input-lg" placeholder="Country" required="required" maxlength="60" type="text" name="country">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="address"  value="<?php echo $row['address']; ?>" class="form-control input-lg" placeholder="Address" required="required" maxlength="100" type="text" name="address">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="phonenumber"  value="<?php echo $row['phone_number']; ?>" class="form-control input-lg" placeholder="Phone number" required="required" maxlength="60" type="text" name="phonenumber">
          </div>

          <div id="datetimepicker" class="input-group input-append date">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="dob" value="<?php echo $row['date_of_birth']; ?>" class="form-control input-lg" name="dob" placeholder="Date of birth" type="text"></input>
            <span class="input-group-addon add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar fa-2"></i>
            </span>
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-2"></i></span>
            <input id="email" value="<?php echo $row['email']; ?>"  class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="email" value="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password" class="form-control input-lg" placeholder="Password"  maxlength="60" type="password" name="password">
          </div>

          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="id" />
            <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Update</button>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

  </div>

  <?php
  require($DOCUMENT_ROOT . "footer.admin.inc.php");
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd'
      });
    </script>
  </body>
</html>
