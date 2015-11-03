<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result = $db->query("SELECT p.id as id, p.name as name, c.name as category, p.price as price FROM tbl_product p join tbl_category c on p.category_id = c.id Order by p.name ASC");
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
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td> <?php echo $row['name'] ?></td>
        <td> <?php echo $row['category'] ?></td>
        <td> <?php echo $row['price'] ?></td>
        <td> <?php echo  "<a href='product_edit.php?edit=$row[id]'>Edit</a> / <a href='product_delete_svc.php?del=$row[id]'>Delete</a>";?></td>
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
