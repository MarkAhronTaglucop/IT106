



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

<style>
    .login-container {
      margin-top: auto;
      margin-bottom: auto;
    }
    .vertical-center {
      min-height: 100%;  
      display: flex;
      align-items: center;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="container">
    <br>
    <br>
    <br>
    <div class="row justify-content-center vertical-center">
      <div class="col-md-4">
        <div class="signup-container">
          <h2 class="text-center mb-4">Signup</h2>
          <br>
          <br>
          <form method="post">
            
          <div class="form-floating mb-3">
             
             <input type="text" class="form-control" id="text" name="user_name" placeholder="Enter Username">
             <label for="floatingInput">Username</label>

           </div>
           
           <div class="form-floating mb-3">
           
             <input type="password" class="form-control" id="password" name="password" placeholder="Password">
             <label for="floatingPassword">Password</label>

           </div>


           <div class="text-center pt-3">
              <button type="submit" class="btn btn-success btn-block" value="signup" style="width: 100%;"><b>SIGN UP</b></button>
            </div>

            
            <div class="text-center p-2">

                <a href="Login.blade.php" class="text-success">Already have an account? Login</a>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  

</body>
</html>