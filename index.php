<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="wrapper">
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

      <form action="edit.html">
        <div id="modalbox" class="modal">
          <h1 class="header">Welcome Back</h1>
          <p>
            Glad to have you back. Enter your email <br />and password to
            continue
          </p>
          <label for="email" id="lb">Email</label> <br />
          <input type="email" id="ip" required /><br />

          <label for="psw" id="lb">Password</label> <br />
          <input type="password" id="ip" required /><br />
          <button id="ip">Login</button>
          <p id="psword">Forgot Password?</p>
          <p id="psword">New Member? <span>Create Account</span></p>
        </div>
      </form>
    </div>
  </body>
</html>
