<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login to your account</title>
  </head>
  <body>
  <div class="signin-form">
        <form action="" method="POST">
            
            <div class="form-header">
                <h2>Sign In</h2>
                <p>Login to Homemade</p>
                </div>
            
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="password" autocomplete="off" required>
            </div>
            
             <div class="small">Forgot Password? <a href="forgot_pass.php">Click Here</a></div><br>
                                                                                      
             <div class="form-group">
                <button type="submit" class="btn btn-primary btn-btn-block btn-lg" name="sign_in">Sign In</button>
            </div>
            
            <?php include("signin_user.php");?> 
      </form>
      <div class="text-center small" style="color:#67428B;">Don't an account? <a href="signup.php">Create One</a>
                                                                                      </div>
      
      </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="css/signin.css">
  </body>
</html>