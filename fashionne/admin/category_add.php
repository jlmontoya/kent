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
        <div class="panel-heading">Add a new Category</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="category_add_svc.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="name" class="form-control input-lg" placeholder="name" required="required" maxlength="60" type="text" name="name">
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
