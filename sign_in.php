<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/sign_in.css" />
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="includes/login.inc.php" method="POST" class="sign-in-form">
          <div class="logo-img">
            <a href="index.php"><img src="images/logo.png" alt="logo" height="70"></a>
          </div>
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="uid" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Password" />
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          
        </form>
        <form action="includes/signup.inc.php" method="POST" class="sign-up-form">
          <div class="logo-img">
            <a href="index.php"><img src="images/logo.png" alt="logo" height="70"></a>
          </div>
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="uid" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwdrepeat" placeholder="Confirm Password" />
          </div>
          <input type="submit" name="submit" class="btn" value="Sign up" />
          
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Hello!</h3>
          <p>
            "Unlock the gateway to remarkable experiences. Sign up today and embark on a journey of seamless event
            planning, where your vision comes to life."
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="images/signin_2.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Welcome!</h3>
          <p>
            "Welcome back to a world of possibilities. Sign in to your account and let the adventure continue, as we
            bring your event visions to vibrant reality."
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="images/signin_1.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="js/sign_in.js"></script>
</body>

</html>