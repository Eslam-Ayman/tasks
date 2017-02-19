<?php 
  //$session = true;
  session_start();
  
  if(isset($_SESSION['message']) && $_SESSION['messageType'] == 'signup')
  {
    echo '<div class="alert alert-success" role="alert" align="center">'.$_SESSION['message'].'</div>';
    session_destroy();
  }
  if(isset($_SESSION['message']) && $_SESSION['messageType'] == 'signin')
  {
    echo '<div class="alert alert-danger" role="alert" align="center">'.$_SESSION['message'].'</div>';
    session_destroy();
  }
  /*if(isset($_SESSION['username']))
  {
    //$session = false;
    //header('Location: ..#/profile');
    //exit;
  }*/

 ?>


<div class="container">
  <div class="row sign">
			<div class="col-sm-8 col-sm-offset-2">
				<h1>Tasks</h1>
        <fieldset>
          <legend>Sign in :</legend>
          <form action="controller/loginCtrl.php" method="post">
              <div class="form-group has-feedback">
                <label for="exampleInputEmail1">Email address</label>
                <input required="required" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label >Password</label>
                <input required="required" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button name="submit" type="submit" value="login" class="btn btn-primary">login</button>
          </form>
        </fieldset>
      </div>
  </div>
</div> 
