<?php
require_once('customer/authenticate.php');
include_once "customer/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
?>

      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Welcome
                    <small><?php echo   $_SESSION['user.fullname'] ?></small>
                </h1>
                <p>These are your current orders</p>
            </div>
        </div>
        <div class="row" >
          <div class="col-lg-2 col-lg-offset-5">

            <h1>Soon</h1>
          </div>
        </div>
      </div>
<?php
$pushdown="pushdown";
require($DOCUMENT_ROOT . "footer.inc.php");
?>
  </body>
</html>
