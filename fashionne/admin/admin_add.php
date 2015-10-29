<?php
  require_once('authenticate.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ExEp - Admin</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome -->
    <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <!-- My styles -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header>
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Extreme Explorer</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../camping.html">Camping</a></li>
            <li><a href="../fishing.html">Fishing</a></li>
          </ul>
        </li>
        <li><a href="../about.html">About</a></li>
        <li><a href="../contact.html">Contact</a></li>
        <li><a href="../registration.html">Registration</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="search.php">Search</a></li>

      </ul>
 
      <ul class="nav navbar-nav navbar-right">
       
       <li><a href="#">Welcome <span style="color:yellow"><?php echo $_SESSION['user.fullname'] ?></span></a></li> 
      <li><a href="logout.php">Logout</a></li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  </header>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default mr-top-20">
        <div class="panel-heading">Add a new Member</div>
        <div class="panel-body">
        <form id="signupForm" class="mr-top-20" method="POST" action="admin_add_member.php" accept-charset="UTF-8">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="fname" class="form-control input-lg" placeholder="Firstname" required="required" maxlength="60" type="text" name="fname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="lname" class="form-control input-lg" placeholder="Lastname" required="required" maxlength="60"type="text" name="lname">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="phone" class="form-control input-lg" placeholder="Phone" required="required" maxlength="60" type="text" name="phone">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>&nbsp;Gender&nbsp;  
            <input type="radio" name="gender" value="male" checked>&nbsp;Male&nbsp;</input>
            <input type="radio" name="gender" value="female">&nbsp;Female</input>          
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span><span>&nbsp;State&nbsp;</span>
            <select name="state" id="state">
              <option value="nsw">NSW</option>
              <option value="vic">VIC</option>
              <option value="tas">TAS</option>
              <option value="wa">WA</option>
              <option value="nt">NT</option>
              <option value="qld">QLD</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            &nbsp;Membership Type&nbsp;
            <input type="radio" name="type" value="silver"> Silver (2 Years)</input>
            <input type="radio" name="type" value="gold"> Gold (3 Years)</input>
            <input type="radio" name="type" value="platinum"> Platinum (5 Years)</input>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-2"></i></span>
            <input id="email" value="<?php echo $row['email']; ?>"  class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="email" value="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-asterisk fa-2"></i></span>
            <input id="password" class="form-control input-lg" placeholder="Password" required="required" maxlength="60" type="password" name="password">
          </div>
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="id" />
            <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Save</button>
          </div>
        </form>
      </div>
      </div>
  </div>
</div>

  </div>


   <footer class="footer">
        <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Talk With Us</h2> 
                <ul class="footer-contact-icons">
                    <li><a href="javascritp:void(0)"><i class="fa fa-phone"></i>&nbsp;&nbsp;+1800 ABC XYZ AAA</a></li>
                    <li><a href="javascritp:void(0)"><i class="fa fa-envelope"></i>&nbsp;&nbsp;info@extreme-explorer.com</a></li>
                    <li><a href="javascritp:void(0)"><i class="fa fa-skype"></i>&nbsp;&nbsp;info.extreme</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <h2>We Are Social</h2>
                <ul class="list-inline">
                    <li><a href="javascritp:void(0)"><img src="../img/fb_ico.png"/></a></li>
                    <li><a href="javascritp:void(0)"><img src="../img/twitter_ico.png"/></a></li>
                    <li><a href="javascritp:void(0)"><img src="../img/gplus_ico.png"/></a></li>
                </ul>
            </div>    
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2 text-center copyright">
                <p>&copy; 2015 Xtreme. All rights reserverd.</p>
                <small>Logos used in the design are the property of their respective owners / copyright holders</small>
            </div>
        </div>
    </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy'
      });
    </script>
  </body>
</html>