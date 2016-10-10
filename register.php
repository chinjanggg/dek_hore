<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Student Christian Center : SCC </title>

  <!--Bootstrap-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bootstrap/js/ie10-viewport-bug-workaround.js" rel="stylesheet">

  <link href="css/template.css" rel="stylesheet">
</head>
<body>
  <!--NAVBAR-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Information <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Dormitory</a></li>
              <li><a href="#">Guesthouse</a></li>
              <li><a href="#">Accommodation</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Activity <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Steering</a></li>
              <li><a href="#">ศูนย์บริการนิสิตนักศึกษา</a></li>
              <li><a href="#">Past Activities</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-form navbar-right">
          <button class="btn btn-signup">Sign up</button>
          <button class="btn btn-signin">Sign in</button>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <!-- registration form-->
  <br><br><br><br><br><br><br><br>
  <form action="register.php" method="post">
    Name <input type="text" name="formName" maxlength="50">
    Surname <input type="text" name="formSurname" maxlength="50"><br>
    University <input type="text" name"formUni" maxlength="50">
    <br><br><input type="submit" name="formSubmit" value="Submit">
  </form>

  <?php
  if(isset($_POST['formSubmit']) and $_POST['formSubmit'] == "Submit") {
    $error = array();
    if(empty($_POST['formName'])) {
      $error[] = 'Please enter your name.';
    }
    if(empty($_POST['formSurname'])) {
      $error[] = 'Please enter your surname.';
    }
    if(empty($_POST['formUni'])) {
      $error[] = 'Please enter your university.';
    }
    if(empty($error)) {
      $varName = $_POST['formName'];
      $varSurname = $_POST['formSurname'];
      $varUni = $_POST['formUni'];
    }
    else {
      print_r($error);
    }
  }
  ?>

  <!--jQuery & Bootstrap JS-->
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
