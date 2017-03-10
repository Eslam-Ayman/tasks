<div class="container">
    <div class="row sign">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>Tasks</h1>

            <!--
           start errors section
           ===============================-->
            <?php
            if (!empty($errorsSignIn or $errorsLogin)) {
                echo ' <div class="alert alert-danger"> ';
                if (!empty($errorsSignIn)) {
                    print_r($errorsSignIn);
                }
                if (!empty($errorsLogin)) {
                    print_r($errorsLogin);
                }
                echo '</div>';
            }
            ?>
            <!--
            end errors section
            ===============================--> 
            <fieldset>
                <legend>Sign in :</legend>
                <form method="post" action="<?= base_url('users/login'); ?>">
                    <div class="form-group has-feedback">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" autofocus>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button  name="submit" type="submit" value="login" class="btn btn-primary">login</button>
                </form>
            </fieldset>
        </div>
    </div>
</div> 
