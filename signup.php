<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Signup Page</title>
  </head>
  <body>
    <div class="wrapper">
    <div class="main">
      
    <div class="sidebar">
        <h2>LOGO</h2>
        <ul>
          <li>
            <a href="#"><i class="fas fa-home"></i>Home</a>
          </li>
          <li>
            <a href="#modalbox" id="login"><i class="fas fa-user"></i>Login</a>
          </li>
        </ul>
      </div>
    <div class="content">

    <div class="card login-box">
  <div class="card-body">

      <h1 class="header">Welcome Back</h1>
          <p class="text-center">
            Glad to have you back. Enter your email <br />and password to
            continue
          </p>

      <form class="row g-3 needs-validation" novalidate>
  <div class="mb-3">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="mb-3">
    <label for="validationCustom05" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide your password.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12 text-center">
    <button class="btn btn-primary mb-3" type="submit">Login</button>
    <p><a href="#">Forgot Password?</a></p>
    <p> New Member? <a href="#">Create Account</a></p>
  </div>
  
</form>
  </div>
    </div>
    </div>  
    </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
