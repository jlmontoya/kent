<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result = $db->query("SELECT * FROM tbl_customer Order by first_name ASC");
?>
<!DOCTYPE html>
<html lang="en">
<?php
  require("header.admin.inc.php");
?>


  <div class="container">



<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>Customers</h1></div>
  <div class="panel-body">
    <a href="customer_add.php" style="width:200px;" id="addmember" class="btn btn-block btn-primary btn-lg">Add a Customer</a>
  </div>

  <!-- Table -->
  <table class="table">

    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td> <?php echo $row['first_name'] ?></td>
        <td> <?php echo $row['last_name'] ?></td>
        <td> <?php echo $row['email'] ?></td>
        <td> <?php echo  "<a href='customer_edit.php?edit=$row[id]'>Edit</a> / <a href='customer_delete_svc.php?del=$row[id]'>Delete</a>";?></td>
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
