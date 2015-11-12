<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result1 = $db->query("SELECT * FROM tbl_category Order by name ASC");

  if( isset($_GET['edit']) ) {
    $id = $_GET['edit'];
    $result2 = $db->query("SELECT * FROM tbl_product WHERE id='$id'");
    $row2 = mysqli_fetch_array($result2);
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
        <div class="panel-heading">Edit a Product</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="product_edit_svc.php" accept-charset="UTF-8" enctype="multipart/form-data">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="name" value="<?php echo $row2['name']; ?>" class="form-control input-lg" placeholder="name" required="required" maxlength="60" type="text" name="name">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="category" class="form-control input-lg" id="category">
                <option value="-1">Select a category ...</option>
              <?php while($row = $result1->fetch_assoc()) { ?>
                  <option value="<?php echo $row[id] ?>"  <?php if($row2['category_id' ] == $row['id']){ echo 'selected'; }  ?>><?php echo $row['name'] ?></option>
              <?php }
                  mysqli_free_result($result1);
                  mysqli_close($db);
              ?>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="size" class="form-control input-lg" id="size">
              <option value="NOSIZE">Select a Size...</option>
              <option value="Small" <?php if($row2['size'] == 'Small'){ echo 'selected'; } ?>>Small</option>
              <option value="Medium" <?php if($row2['size'] == 'Medium'){ echo 'selected'; } ?>>Medium</option>
              <option value="Large" <?php if($row2['size' ]== 'Large'){ echo 'selected'; }  ?>>Large</option>
              <option value="Extra Large" <?php if($row2['size'] == 'Extra Large'){ echo 'selected'; }  ?>>Extra Large</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <select name="color" class="form-control input-lg" id="color">
              <option value="NOSIZE">Select a Color...</option>
              <option value="red" class="red-color-opt" <?php if($row2['color']== 'red'){ echo 'selected'; }?>>Red</option>
              <option value="green" class="green-color-opt" <?php if($row2['color']== 'green'){ echo 'selected'; }?>>Green</option>
              <option value="yellow" class="yellow-color-opt" <?php if($row2['color']== 'yellow'){ echo 'selected'; }?>>Yellow</option>
              <option value="blue" class="blue-color-opt" <?php if($row2['color']== 'blue'){ echo 'selected'; }?>>Blue</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="price" class="form-control input-lg" placeholder="Price" required="required" maxlength="60" type="number" min="1"  step="any" name="price" value="<?php echo $row2['price']; ?>">
          </div>

          <div class="input-group">
            <img style="width:100px;height:100px;" class="thumbnail" src="<?php echo '../'.$row2['photo_path'] ?>" alt="<?php echo $row2['name'] ?>">
            <span class="btn btn-default btn-lg btn-file">
              Change Photo ... <input type="file" name="fileToUpload" id="fileToUpload">
            </span><span id="fileName"></span>
          </div>

          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row2['id']; ?>" id="id" />
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
      $('#fileToUpload').change(function(){
        $('#fileName').text($(this).val());
      }
      );
    </script>
  </body>
</html>
