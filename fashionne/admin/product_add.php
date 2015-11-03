<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result = $db->query("SELECT * FROM tbl_category Order by name ASC");
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
        <div class="panel-heading">Add a new Product</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="category_add_svc.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="name" class="form-control input-lg" placeholder="name" required="required" maxlength="60" type="text" name="name">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="category" class="form-control input-lg" id="category">
                <option value="-1">Select a category ...</option>
              <?php while($row = $result->fetch_assoc()) { ?>
                  <option value=" <?php echo $row[id] ?>"><?php echo $row['name'] ?></option>
              <?php }
                  mysqli_free_result($result);
                  mysqli_close($db);
              ?>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="size" class="form-control input-lg" id="size">
              <option value="NOSIZE">Select a Size...</option>
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
              <option value="Extra Large">Extra Large</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="color" class="form-control input-lg" id="color">
              <option value="NOSIZE">Select a Color...</option>
              <option value="red" class="red-color-opt" >Red</option>
              <option value="green" class="green-color-opt">Green</option>
              <option value="yellow" class="yellow-color-opt">Yellow</option>
              <option value="blue" class="blue-color-opt">Blue</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="price" class="form-control input-lg" placeholder="Price" required="required" maxlength="60" type="number" min="1"  step="any" name="price">
          </div>

          <div class="input-group">
            <span class="btn btn-default btn-lg btn-file">
            Upload Photo ... <input type="file">
    </span>
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
