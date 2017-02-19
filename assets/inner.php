<?php 
  
   session_start();
  if(!isset($_SESSION['username']))
  {
    header('Location:..#/signin');
  }
//session_destroy();
 ?>


<!doctype html>
<html lang="en" ng-app="tasks">
<head>
    <meta charset="utf-8"> 
	<!-- this meta for IE cmbatabilty -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- this meta for resposive for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/A-style.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Tasks</title>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.sidebar > i
		{
			position: absolute;
			left:100%;
			top:2%;
			display: none;
			color: #2f4154;
		}
		/*.sidebar > i:active + .sidebar{
			-webkit-animation-duration: 3s;
		    -webkit-animation-delay: 2s;
		    -webkit-animation-iteration-count: infinite;
		    width: 159px;
		}*/
		.sidebar
		{
			/*position: relative;*/
			transition: all 0.75s ease;
		}
		aside.pushmenu-open { left: 0px; bottom: 0; top: 51px;}
		@media only screen and (max-width: 765px) {
			.sidebar
			{
				left: -50%;
				bottom: 100%;
				top: 65%;
				/*left: -181px;*/
				/*width: 0;*/
				/*display: none;*/
				/*width : 165px;*/
				overflow: inherit;
				/*margin-left: -159px;*/
			}
			.sidebar > i
			{
				display: inline-block;
			}
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-inverse nav-color navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="..#/home">Tasks</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../controller/logoutCtrl.php" id="sinup">Sign Out</a></li>
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
				<li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
				<li><a href="#"><?php echo $_SESSION['email']; ?></a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">+20-<?php echo $_SESSION['phone']; ?></a></li>
				</ul>
			</li>
			<li>
				<a href="..#/profile" data-toggle="tooltip" data-placement="bottom" title="Profile Setting"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
			</li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container-fluid -->
    </nav>
    <!-- ************************************    aside bar   ************************************* -->
    <!-- ************************************    aside bar   ************************************* -->
    <!-- ************************************    aside bar   ************************************* -->
<div class="container-fluid">
    <div class="row" ng-controller="side-tabs as nav">
        <aside class="col-xs-6 col-sm-3 col-md-2 sidebar">
            <i class="fa fa-angle-double-right fa-3x" aria-hidden="true"></i>
			<form class="form-inline" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." />
						<span class="input-group-btn">
						<button type="submit" class="btn btn-srch">Search</button>
						</span>
					</div>
			</form> 
			
			<ul class="nav nav-sidebar">
				<li ng-class="{active:nav.checkTab(1)}"><a href="#mustDo" ng-click="nav.setTab(1)"><i class="fa fa-table"></i>Must Do</a></li>
				<li ng-class="{active:nav.checkTab(2)}"><a href="#done" ng-click="nav.setTab(2)"><i class="fa fa-check-square-o"></i>Done</a></li>
				<li ng-class="{active:nav.checkTab(3)}"><a href="#trash" ng-click="nav.setTab(3)"><i class="fa fa-trash-o"></i>in Trash</a></li>
			</ul>
			
			<ul class="nav nav-sidebar">
				<li ng-class="{active:nav.checkTab(4)}"><a href="#members" ng-click="nav.setTab(4)"><i class="fa fa-users"></i>Members</a></li>
				<li ng-class="{active:nav.checkTab(5)}"><a href="#comments" ng-click="nav.setTab(5)"><i class="fa fa-comments-o"></i>Comments</a></li>
				<li ng-class="{active:nav.checkTab(6)}"><a href="#chat" ng-click="nav.setTab(6)"><i class="fa fa-envelope-o"></i>Chat</a></li>
			</ul>

            <div class="ftr T-FOOTER text-center">
                <div id="T-a">
                  <a href="#"><i class="fa fa-facebook fa-lg" id="T-i1"></i></a>
                  <a href="#"><i class="fa fa-twitter fa-lg" id="T-i2"></i></a>
                  <a href="#"><i class="fa fa-google-plus fa-lg" id="T-i3"></i></a>
                  <a href="#"><i class="fa fa-instagram fa-lg" id="T-i4"></i></a>
                </div>
                <span>&copy; All rights are resieved for TASKS 2016</span>
             </div>
        </aside>
<!--  ***********************************************      content section     *************************************************************   -->
        <section class="content col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
        	<div class="container" ng-view>
        	</div>
        </section>
    </div><!-- /.row of this page -->
</div><!-- /.container-fluid -->
    
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/angular.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.sidebar > i').click(function(){
				// $(this).toggleClass('fa-angle-double-right','fa-window-close-o',1000, "easeInOutQuad");
				$(this).toggleClass('fa-angle-double-right').toggleClass('fa-window-close-o');
				$('.fa-window-close-o').css('font-size','2em');
				$('.fa-angle-double-right').css('font-size','3em');
				$('.sidebar').toggleClass('pushmenu-open');
			});
		});
	</script>
</body>
</html>