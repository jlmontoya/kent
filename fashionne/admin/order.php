<?php
  require_once('authenticate.php');
  include_once "connect.php";
  $result = $db->query("SELECT o.id as id, o.date_placed as date, c.first_name as firstname, c.last_name  as lastname, o.total as total FROM tbl_order o join tbl_customer c on o.customer_id = c.id Order by o.date_placed DESC");
?>
<!DOCTYPE html>
<html lang="en">
<?php
  require("header.admin.inc.php");
?>

<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>Orders</h1></div>


  <!-- Table -->
  <table class="table">

    <tr>
      <th>Date</th>
      <th>Customer</th>
      <th>Total</th>
      <th>Actions</th>
    </tr>
    <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td style="vertical-align:middle"> <?php echo $row['date'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['firstname'] .' '. $row['lastname'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['total'] ?></td>
        <td style="vertical-align:middle"> <?php echo  "<a href='order_details.php?id=$row[id]'>Details</a> / <a href='order_ship_svc.php?del=$row[id]'>Ship</a>";?></td>
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
