<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require($DOCUMENT_ROOT . "header.inc.php");
?>

 <div class="container">
    <div class="jumbotron mr-top-20">
      <h1>Have an enquiry?</h1>
      <p>Send us a message today!</p>
    </div>
    <form>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Subject</span>
          <input type="text" class="form-control" placeholder="Type your Subject Text here" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Type your e-mail address here" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Message</span>
          <textarea name="" class="form-control" cols="30" rows="10" placeholder="Type your Message Text here"></textarea>
        </div>
      </div>
  <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Click here to send your Message">Submit</button>
  <button type="reset" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Click here to clear your Form">Clear</button>
</form>

  <address>
  Visit us at:<br>
  Level 5 & 6, 70-72 Bathurst Street;<br>
  Level 5, 545 Kent Street<br>
  Sydney NSW 2000, Australia
  </address>
</div>

  <?php
  require($DOCUMENT_ROOT . "footer.inc.php");
  ?>
  </body>
</html>
