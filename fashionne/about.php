<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
?>

      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>
        <div class="row" >
          <div class="col-lg-2 col-lg-offset-5">
            <img src="img/aboutus.jpg" alt="About" class="img-responsive img-circle" >
          </div>
        </div>
      </div>
<?php
$pushdown="pushdown";
require($DOCUMENT_ROOT . "footer.inc.php");
?>
  </body>
</html>
