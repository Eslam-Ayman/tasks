
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">


            <h1>Tasks</h1>

            <!--
            start errors section
            ===============================--> 
            <?php
            if (!empty($errors)) {
                echo '<div class="alert alert-danger">';
                print_r($errors);
                echo'</div>';
            }
            ?>
            <!--
            end errors section
            ===============================--> 

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up</h3>
                </div>
                <div class="panel-body">
                    <form id="signupForm1" class="form-horizontal" method="post" action="<?= base_url('users/addUser'); ?>">

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="username1">Username</label>
                            <div class="col-sm-5">
                                <input  type="text" class="form-control" id="username1" name="username" placeholder="Username" autofocus/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email1">Email</label>
                            <div class="col-sm-5">
                                <input  type="text" class="form-control" id="email1" name="email" placeholder="Email"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="password1">Password</label>
                            <div class="col-sm-5">
                                <input  type="password" class="form-control" id="password1" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="confirm_password">Confirm password</label>
                            <div class="col-sm-5">
                                <input  type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Birth">Birth Date</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="Birth" name="birthdate" placeholder="Birth Date"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Phone">Phone Number</label>
                            <div class="col-sm-5">
                                <input  type="number" class="form-control" id="Phone" name="phone" placeholder="Phone"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Country">Country</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Country" name="country" placeholder="country"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="agree1" name="agree" value="agree" />Please agree to our policy
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="signup">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

