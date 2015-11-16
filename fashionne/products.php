<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
$db = connectToMysql();
$category_id = htmlspecialchars($_GET["category_id"]);
$result = $db->query("SELECT * FROM tbl_category Order by name ASC");
?>

<div class="container">

      <div class="row text-center page-header">
        <h1>Garment Products</h1>
      </div>
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked " role="tablist">

        <?php while($row = $result->fetch_assoc()) { ?>
            <li role="presentation" class="<?php if($category_id == $row['id']){ echo 'active'; }?>"><a href="#<?php echo $row['name'] ?>" role="tab" data-toggle="tab"> <?php echo $row['name'] ?></a></li>
        <?php }
            mysqli_free_result($result);
            mysqli_close($db);
        ?>
          </ul>
      </div>

      <div class="tab-content col-md-8">

        <?php

          $db = connectToMysql();
          $resultCategories = $db->query("SELECT * FROM tbl_category Order by name ASC");
          while($category = $resultCategories->fetch_assoc()) {
        ?>
        <div  role="tabpanel" class="tab-pane <?php if($category_id == $category['id']){ echo 'active'; }?>" id="<?php echo $category['name'] ?>">

              <?php
                $resultProducts = $db->query("SELECT p.id as id, p.name as name, p.size as size, c.name as category, p.price as price, p.photo_path as photo_path FROM tbl_product p join tbl_category c on p.category_id = c.id and c.id =".$category['id']. "  Order by p.name ASC");
                $i=0;
                while($product = $resultProducts->fetch_assoc()) {
              ?>
                  <?php if($i==0) {?>
                    <div class="row">
                  <?php } ?>

                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img src="<?php echo $product['photo_path'] ?>" alt="<?php echo $product['name'] ?>">
                        <div class="caption">
                          <h3><?php echo $product['name'] ?></h3>
                          <p>Price $<?php echo $product['price'] ?></p>
                          <p>
                            <a href="#" class="btn btn-primary" role="button">Buy</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php
                   $i++;
                   if($i==3) {
                       $i = 0;
                  ?>
                    </div>
              <?php }
              }

              if($i != 0 ) {
                ?>
                    </div>
              <?php }

              mysqli_free_result($resultProducts);
              ?>
        </div>
        <?php
          }
          mysqli_free_result($resultCategories);
          mysqli_close($db);
        ?>
      </div>
  </div>
</div>


  <?php
  require($DOCUMENT_ROOT . "footer.inc.php");
  ?>
    <script>
    $('#myTabs a').click(function (e) {
      e.preventDefault();
      $(this).tab('show')
    });

    </script>

  </body>
</html>
