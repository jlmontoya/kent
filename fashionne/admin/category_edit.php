<?php
  require_once('authenticate.php');
  include_once "connect.php";
  if( isset($_GET['edit']) ) {
    $id = $_GET['edit'];
    $result = $db->query("SELECT * FROM tbl_category WHERE id='$id'");
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
        <div class="panel-heading">Edit Category Details</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="category_edit_svc.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="fname" value="<?php echo $row['name']; ?>" class="form-control input-lg" placeholder="Name" required="required" maxlength="60" type="text" name="name">
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
