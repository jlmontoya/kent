<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/model1.png" alt="Fishing slide">

        </div>
        <div class="item">
          <img class="second-slide" src="img/model2.png" alt="Camping slide">

        </div>
        <div class="item">
          <img class="third-slide" src="img/model3.png" alt="Camping slide">

        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <section class="container marketing">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail thumbnail-noborder">
            <img class="img-responsive img-circle" src="img/corporate.png" alt="corporate"/>
          </div>
          <h2 class="text-center">Corporate</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p class="text-center"><a href="camping.html" role="button">View more</a></p>
        </div><!-- /.col-md-4 -->

        <div class="col-md-4">
          <div class="thumbnail thumbnail-noborder">
            <img class="img-responsive img-circle" src="img/sport.png" alt="sports"/>
          </div>
          <h2 class="text-center">Sports</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p class="text-center"><a href="camping.html" role="button">View more</a></p>
        </div><!-- /.col-md-4 -->
        <div class="col-md-4">
          <div class="thumbnail thumbnail-noborder">
            <img class="img-responsive img-circle" src="img/work.png" alt="sports"/>
          </div>
          <h2 class="text-center">Work</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p class="text-center"><a href="camping.html" role="button">View more</a></p>
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
    </section>

    <?php
    require($DOCUMENT_ROOT . "footer.inc.php");
    ?>
  </body>
</html>
