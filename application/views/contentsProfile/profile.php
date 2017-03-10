


<div>
    <section class="container profile">
        <div class="row" style="margin-top: 27px;">
            <div class="col-sm-12">
                <fieldset>
                    <legend><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Profile Sitting</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <form class="col-xs-12 col-sm-8" method="post" action="controller/registerCtrl.php">
                                <div class="container-fluid">
                                    <div class="form-group row" ng-init="username = '<?php echo $_SESSION['username']; ?>'">
                                        <label for="exampleInputEmail1">User Name</label><div class="clearfix"></div>
                                        <input readonly type="text" class="form-control col-xs-12 col-sm-8" placeholder="username" name="username" value="{{username}}">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#username"><i class="fa fa-sliders" aria-hidden="true"></i>Change username</button>
                                    </div>
                                    <div class="form-group row" ng-init="email = '<?php if (isset($_SESSION['username'])) echo $_SESSION['email']; ?>'">
                                        <label for="exampleInputEmail1">Email address</label><div class="clearfix"></div>
                                        <input readonly type="email" class="form-control" placeholder="Email" name="email" value="{{email}}">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#email"><i class="fa fa-sliders" aria-hidden="true"></i>Change E-mail</button>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword1">Password</label><div class="clearfix"></div>
                                        <input disabled type="password" class="form-control" placeholder="Password" name="password" value="" ng-if="currentPass == password">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#password"><i class="fa fa-sliders" aria-hidden="true"></i>Change Password</button>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword1">Confirm-Password</label><div class="clearfix"></div>
                                        <input type="password" class="form-control" placeholder="Confirem Password" name="confirm_password">
                                        <button disabled type="button" class="btn btn-srch" data-toggle="modal" data-target="#password"><i class="fa fa-sliders" aria-hidden="true"></i>Change Password</button>
                                    </div>
                                    <div class="form-group row" ng-init="birthdate = '<?php echo $_SESSION['birth-date']; ?>'">
                                        <label for="exampleInputPassword1">Birth-Date</label><div class="clearfix"></div>
                                        <input readonly type="date" class="form-control" placeholder="birth-date" name="birthdate" value="{{birthdate}}">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#birth"><i class="fa fa-sliders" aria-hidden="true"></i>Change Birth-Date</button>
                                    </div>
                                    <div class="form-group row" ng-init="phone = '<?php echo $_SESSION['phone']; ?>'">
                                        <label for="exampleInputPassword1">Phone Number</label><div class="clearfix"></div>
                                        <input readonly type="number" class="form-control" placeholder="Phone Number" name="phone" value="{{phone}}">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#phone"><i class="fa fa-sliders" aria-hidden="true"></i>Change Phone Number</button>
                                    </div>
                                    <div class="form-group row" ng-init="country = '<?php echo $_SESSION['country']; ?>'">
                                        <label for="exampleInputPassword1">Country</label><div class="clearfix"></div>
                                        <input readonly type="text" class="form-control" placeholder="Country" name="country" value="{{country}}">
                                        <button type="button" class="btn btn-srch" data-toggle="modal" data-target="#country"><i class="fa fa-sliders" aria-hidden="true"></i>Change Country</button>
                                    </div>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male" checked>
                                        <strong>Male</strong>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                                        <strong>Female</strong>
                                    </label>
                                    <div style="padding:30px 0px 10px 50px ; line-height:44px">
                                        <button type="submit" name="submit" value="saveProfile" class="btn btn-srch btn-profile"  style="margin-right:50px"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Save Profile</button>
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"></i>Delete Account</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-xs-12 col-sm-4 pull-right text-center">
                                <img src="assets/img/avatar-1.png" alt="profil-img" class="img-responsive center-block"data-toggle="modal" data-target="#photo" />
                                <button type="button" class="btn btn-srch btn-profile" data-toggle="modal" data-target="#photo"><i class="fa fa-sliders" aria-hidden="true"></i>Change Your Picture</button>
                            </div>
                        </div><!-- end of the row -->
                    </div><!-- end of the container -->
                </fieldset>
            </div><!-- end of the col-sm-12 -->
        </div><!-- end of the main row -->
    </section>
    <div class="row T-FOOTER text-center" style="position:static">
        <div id="T-a">
            <a href="#"><i class="fa fa-facebook fa-2x" id="T-i1"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x" id="T-i2"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-2x" id="T-i3"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x" id="T-i4"></i></a>
        </div>
        <span>&copy; All rights are resieved for TASKS 2016</span>
    </div>


    <div class="modal fade" id="username" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update username</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-3">New name</label>
                            <div class="col-sm-8"><input type="text" class="form-control" id="exampleInputName2" placeholder="username..." ng-model="username"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update E-mail</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-3">New E-mail</label>
                            <div class="col-sm-8"><input type="text" class="form-control" id="exampleInputName2" placeholder="new email..." ng-model="email"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update Password</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal" ng-init="password = '<?php echo $_SESSION['password']; ?>'">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-3">Current Password</label>
                            <div class="col-sm-8"><input type="password" class="form-control" id="exampleInputName2" placeholder="Password..." ng-model="currentPass"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="birth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update Birth-Date</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-3">New birth-date</label>
                            <div class="col-sm-8"><input type="date" class="form-control" id="exampleInputName2" placeholder="birthdate..." ng-model="birthdate"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="phone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update Phone Number</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-4">New Phone Number</label>
                            <div class="col-sm-8"><input type="number" class="form-control" id="exampleInputName2" placeholder="phone number..." ng-model="phone"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="country" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update Country</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputName2" class="control-label col-sm-3">Your Country</label>
                            <div class="col-sm-8"><input type="text" class="form-control" id="exampleInputName2" placeholder="government / Country..." ng-model="country"></div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

    <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Update Yor picture</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <form>
                        <div class="input-group space">
                            <input type="file" class="form-control" aria-label="...">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">Upload</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal  -->

</div>


<!-- <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>-->
<!-- </body> -->
<!--</html> -->




<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"> -->
<!-- this meta for IE cmbatabilty -->
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
<!-- this meta for resposive for mobile -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Profile</title> -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- </head>-->
<!-- <body> -->
<!--<nav class="navbar navbar-inverse nav-color navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../assets#/home">Tasks</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../controller/logoutCtrl.php" id="sinup">Sign Out</a></li>
        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-lg"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Ahmed put new carde</a></li>
                            <li><a href="#">Date of carde-1 has expired</a></li>
                            <li><a href="#">Eslam has added new member</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">See More ...</a></li>
                            </ul>
                    </li>
        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">+20-</a></li>
                            </ul>
                    </li>
                    <li>
                            <a href="profile.php" data-toggle="tooltip" data-placement="bottom" title="Profile Setting"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
                    </li>
      </ul> -->
<!-- </div> --><!-- /.navbar-collapse -->
<!-- </div> --><!-- /.container-fluid -->
<!-- </nav> -->
<!-- ************************************    content of profile Sitting   ************************************* -->
<!-- ************************************    content of profile Sitting   ************************************* -->
<!-- ************************************    content of profile Sitting   ************************************* -->