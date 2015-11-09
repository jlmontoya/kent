<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result = $db->query("SELECT p.id as id, p.name as name, p.size as size, c.name as category, p.price as price, p.photo_path as photo_path FROM tbl_product p join tbl_category c on p.category_id = c.id Order by p.name ASC");
?>
<!DOCTYPE html>
<html lang="en">
<?php
  require("header.admin.inc.php");
?>

<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Categories</div>
  <div class="panel-body">
    <a href="product_add.php" style="width:200px;" id="addmember" class="btn btn-block btn-primary btn-lg">Add Product</a>
  </div>

  <!-- Table -->
  <table class="table">

    <tr>
      <th>Photo</th>
      <th>Name</th>
      <th>Size</th>
      <th>Category</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td style="vertical-align:middle"><img style="width:100px;height:100px;" class="thumbnail" src="<?php echo '../'.$row['photo_path'] ?>" alt="<?php echo $row['name'] ?>"></td>
        <td style="vertical-align:middle"> <?php echo $row['name'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['size'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['category'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['price'] ?></td>
        <td style="vertical-align:middle"> <?php echo  "<a href='product_edit.php?edit=$row[id]'>Edit</a> / <a href='product_delete_svc.php?del=$row[id]'>Delete</a>";?></td>
      </tr>
    <?php }
        mysqli_free_result($result);
        mysqli_close($db);
    ?>
    </tbody>
  </table>
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
