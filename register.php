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
    Name <input type="text" name="formName" maxlength="50"
      value="<?php if(!empty($_POST['formName'])) { echo htmlentities ($_POST['formName']); }?>">
    Surname <input type="text" name="formSurname" maxlength="50"
      value="<?php if(!empty($_POST['formSurname'])) { echo htmlentities ($_POST['formSurname']); }?>"><br>
    Education <select name="formEdu">
      <option value=""></option>
      <option value="highschool" <?php if(!empty($_POST["formEdu"]) and $_POST["formEdu"]=="highschool")
        echo(" selected=\"selected\"");?>>Highschool</option>
      <option value="undergrad" <?php if(!empty($_POST["formEdu"]) and $_POST["formEdu"]=="undergrad")
        echo(" selected=\"selected\"");?>>Undergraduate</option>
      <option value="grad" <?php if(!empty($_POST["formEdu"]) and $_POST["formEdu"]=="grad")
        echo(" selected=\"selected\"");?>>Graduate</option>
    </select>
    University/School <input type="text" name="formUni" maxlength="50"
      value="<?php if(!empty($_POST['formUni'])) { echo htmlentities ($_POST['formUni']); }?>"><br>
    <br><br><input type="submit" name="formSubmit" value="Submit">
  </form>

  <?php
  if(isset($_POST['formSubmit']) and $_POST['formSubmit'] == "Submit") {
    $errorMessage = '';
    if(empty($_POST['formName'])) {
      $errorMessage .= '<li>Please enter name.</li>';
    }
    if(empty($_POST['formSurname'])) {
      $errorMessage .= '<li>Please enter surname.</li>';
    }
    if(empty($_POST['formEdu'])) {
      $errorMessage .= '<li>Please enter education.</li>';
    }
    if(empty($_POST['formUni'])) {
      $errorMessage .= '<li>Please enter university.</li>';
    }
    if(empty($errorMessage)) {
      $varName = $_POST['formName'];
      $varSurname = $_POST['formSurname'];
      $varEdu = $_POST['formEdu'];
      $varUni = $_POST['formUni'];

      $fs = fopen("register.csv","a");
      fwrite($fs,$varName . ", " . $varSurname . ", " . $varEdu . ", " . $varUni . "\n");
      fclose($fs);

      header("Location: register_complete.html");
      exit;
    }
    else {
      echo("<p>There was an error with your form:</p>\n");
      echo("<ul>" . $errorMessage . "</ul>\n");
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
