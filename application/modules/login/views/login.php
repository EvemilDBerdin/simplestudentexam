<section id="wrapper" class="mt-2">
    <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material" id="userAuth">
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="login_username"><strong>Username: </strong></label>
                        <input class="form-control" type="text" required="required" id="login_username" name="login_username" placeholder="Enter Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="login_password"><strong>Password: </strong></label>
                        <input class="form-control" type="password" required="required" id="login_password" name="login_password" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                            <label for="checkbox-signup"> Remember me </label>
                        </div>

                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                    </div>
                    <div class="form-group">
                        <button class="text-dark pull-right btn" type=" button" data-bs-toggle="modal" data-bs-target="#to-recover" data-toggle="tooltip" title="Forgot password">
                            <i class="fa fa-lock"></i> Forgot password?
                        </button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <div class="social">
                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook"></i> </a>
                        <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </a>
                    </div>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    Don't have an account? <button class="text-info m-l-5 btn" type="button" data-bs-toggle="modal" data-bs-target="#createAccount" data-toggle="tooltip" title="Sign up"><b>Sign Up</b></button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade mt-5" id="to-recover" tabindex="-1" data-bs-backdrop="static" aria-labelledby="to-recoverLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Recover Password</h3>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form class="form-horizontal" method="POST">
                <div class="modal-body mt-4" style="padding: 0px 50px 0px 50px;">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="required" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="createAccount" tabindex="-1" data-bs-backdrop="static" aria-labelledby="createAccountLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-bold" id="createAccountLabel">Register Account For Student</h5>
            </div>
            <form method="POST" id="createAccountForm" data-parsley-validate>
                <div class="modal-body" style="padding: 0px 50px 0px 50px;">
                    <div class="mt-3">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" required="required">
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" required="required">
                    </div>
                    <div>
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" required="required">
                    </div>
                    <div>
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control" data-parsley-minlength="11" data-parsley-maxlength="12" name="contact" required="required">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" data-parsley-type="email" name="email" required="required">
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" class="form-control" data-parsley-pattern="^[a-zA-Z0-9]+$" name="username" required="required">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <div class="d-flex">
                            <input type="password" class="form-control" data-parsley-minlength="8" data-parsley-maxlength="22" data-parsley-pattern="[a-zA-Z0-9\pL\s\-]+$" name="password" required="required">
                            <button class="btn" type="button" id="passwordShowToggle"><i class="fa-solid fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-end mt-2">
                        <input type="checkbox" id="chck" required="required"><label for="chck" class="text-primary fst-italic text-decoration-underline">&nbspI Agree.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enroll Now</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>