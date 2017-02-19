<?php 
  /*echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  
  echo $_SERVER['QUERY_STRING'];
  echo $_SERVER["PATH_INFO"];
  echo $_SERVER['SERVER_NAME'] . getcwd() . "\n";
  echo $_SERVER['PHP_SELF'];*/
//echo $_SERVER['REQUEST_URI'];
  $nav = false;
  session_start();
  if(isset($_SESSION['username']))
  {
    $nav = true;
  }

  

  /*if($_SERVER['REQUEST_URI'] == "/projects/tasks/assets/profile" && $nav == false);
  {
    header("Location: #/signin");
  }*/

//session_destroy();
/*$locationProvider.html5mode(true);
<base herf="/">
$location.path()*/
 ?>


<!DOCTYPE html>
<html lang="en" ng-app="tasks">

<head>
  <meta charset="utf-8">
  <!-- <base herf="/"> -->
  <!-- this meta for IE cmbatabilty -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- this meta for resposive for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/A-style.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tasks</title>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="margin-top:58px">
<div ng-controller="<?php if($nav) echo 'pathCtrl'; else echo 'sign';?>"></div>


<div ng-controller="sign">
<nav class="navbar navbar-inverse nav-color navbar-fixed-top" id="T-N" ng-if="<?php echo !$nav;?>">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#home">Tasks</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#signin">Sign IN</a></li>
        <li><a href="#signup">Sign Up</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--   *******************     user navbar    ************************  -->

<nav class="navbar navbar-inverse nav-color navbar-fixed-top" ng-if="<?php echo $nav;?>">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#/home">Tasks</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="controller/logoutCtrl.php" id="sinup">Sign Out</a></li>
            <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-lg"></i></a>
        <ul class="dropdown-menu">
        <li><a href="#">Ahmed put new carde</a></li>
        <li><a href="#">Date of carde-1 has expired</a></li>
        <li><a href="#">Eslam has added new member</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">See More ...</a></li>
        </ul>
      </li>
            <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu">
        <li><a href="assets/inner.php#/mustDo"><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="#"><?php echo $_SESSION['email']; ?></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">+20-<?php echo $_SESSION['phone']; ?></a></li>
        </ul>
      </li>
      <li>
        <a href="#/profile" data-toggle="tooltip" data-placement="bottom" title="Profile Setting"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
      </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>

<!--   *******************     container    ************************  -->
<div ng-view></div>
</div>

  <script type="text/javascript" src="assets/js/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/angular.js"></script>
  <script type="text/javascript" src="assets/js/angular-route.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> -->
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script type="text/javascript">
    // alert(location.path());
  </script>
  
  <script type="text/javascript" src="assets/js/script.js"></script>


</body>
</html>

