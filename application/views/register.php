<!DOCTYPE html>
<html lang="en">

<?php require('head.php'); ?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 ">
          <img src="<?php echo base_url()."/upload/1.png"?>">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="POST" action="<?php echo base_url()."SignUp/UserSignUp"?>" class="user" >
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="userName" name="userName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="userEmail" name="userEmail" placeholder="Email Address">
                </div>
                <?php if(isset( $_SESSION['refercode'])){?>
                <div class="form-group">
                  <input value="<?php echo $_SESSION['refercode']?>" hidden type="text" class="form-control form-control-user" id="refer" name="refercode" placeholder="refer">
                </div>
                <?php } ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="userPassword" name="userPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="userRepeatPassword" name="userRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Register Account
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url()."/login"?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php require('foot.php'); ?>

</body>

</html>