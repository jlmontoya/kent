<?php
  require_once('authenticate.php');
  include_once "connect.php";
  if( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $result = $db->query("SELECT o.id as id, o.date_placed as date, c.first_name as firstname, c.last_name  as lastname, o.total as total FROM tbl_order o join tbl_customer c on o.customer_id = c.id WHERE o.id= $id");
    $result2 = $db->query("SELECT oi.id as id, oi.quantity as quantity, oi.price as price, p.name  as name FROM tbl_order_item oi join tbl_product p on p.id = oi.product_id WHERE oi.order_id= $id");

    $order = mysqli_fetch_array($result);
  }

?>
<!DOCTYPE html>
<html lang="en">
<?php
  require("header.admin.inc.php");
?>

<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>Order</h1></div>

  <table class="table">
    <tr>
      <th>Date</th>
      <th>Customer</th>
      <th>Total</th>
    </tr>
    <tbody>
      <tr>
        <td style="vertical-align:middle"> <?php echo $order['date'] ?></td>
        <td style="vertical-align:middle"> <?php echo $order['firstname'] .' '. $order['lastname'] ?></td>
        <td style="vertical-align:middle"> <?php echo $order['total'] ?></td>
      </tr>
    </tbody>
  </table>
  </p>
  <div class="panel-heading"><h1>Order Details</h1></div>
  <!-- Table -->
  <table class="table">
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
    <tbody>
    <?php while($row = $result2->fetch_assoc()) { ?>
      <tr>
        <td style="vertical-align:middle"> <?php echo $row['name'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['quantity'] .' '. $row['lastname'] ?></td>
        <td style="vertical-align:middle"> <?php echo $row['price'] ?></td>
        <td style="vertical-align:middle"> <?php echo  "<a href='#'>Edit</a> / <a href='#'>Delete</a>";?></td>
      </tr>
    <?php }
        mysqli_free_result($result2);
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
