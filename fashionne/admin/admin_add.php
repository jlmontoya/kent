<?php
  require_once('authenticate.php');
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
        <div class="panel-heading">Add a new Member</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="admin_add_member.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="fname" class="form-control input-lg" placeholder="Firstname" required="required" maxlength="60" type="text" name="fname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="lname" class="form-control input-lg" placeholder="Lastname" required="required" maxlength="60"type="text" name="lname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="phone" class="form-control input-lg" placeholder="Phone" required="required" maxlength="60" type="text" name="phone">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>&nbsp;Gender&nbsp;
            <input type="radio" name="gender" value="male" checked>&nbsp;Male&nbsp;</input>
            <input type="radio" name="gender" value="female">&nbsp;Female</input>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span><span>&nbsp;State&nbsp;</span>
            <select name="state" id="state">
              <option value="nsw">NSW</option>
              <option value="vic">VIC</option>
              <option value="tas">TAS</option>
              <option value="wa">WA</option>
              <option value="nt">NT</option>
              <option value="qld">QLD</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            &nbsp;Membership Type&nbsp;
            <input type="radio" name="type" value="silver"> Silver (2 Years)</input>
            <input type="radio" name="type" value="gold"> Gold (3 Years)</input>
            <input type="radio" name="type" value="platinum"> Platinum (5 Years)</input>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-2"></i></span>
            <input id="email" value="<?php echo $row['email']; ?>"  class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="email" value="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password" class="form-control input-lg" placeholder="Password" required="required" maxlength="60" type="password" name="password">
          </div>
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="id" />
            <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Save</button>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

  </div>


  <?php
    $pushdown="pushdown";
    require( "footer.admin.inc.php");
  ?>

    <script src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy'
      });
    </script>
  </body>
</html>
