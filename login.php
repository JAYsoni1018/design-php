<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form with Shake Effect</title>
  <link rel="stylesheet" href="Css/loginstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action="./adminLogin.php" method="POST">
      <div class="field email">
        <div class="input-area">
          <input type="text" id="email" name='email' placeholder="Email Address">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name='pass' id="pass" placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <input type="submit" id='login' name='login' onclick="login()" value="Login">
    </form>
  </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase-app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase-auth.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase-database.js"></script>
<script src="JS/login.js" ></script>
</html>