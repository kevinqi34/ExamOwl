<!-- Include User Logic -->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/user/login.php')?>

<div id="user">
  <h1>Login</h1>
  <form method="post" action="?redirect=true">
    <input value="<?php echo $email; ?>" type="text" id="email" name="email" placeholder="Email Address" required />
    <input value="<?php echo $password; ?>" type="password" id="password" name="password" placeholder="Password" required />
    <button type="submit" value="Login">Log in</button>
  </form>
  <a href="./reset_password.php">Forgot your password?</a>
  <p id ="error" ><?php echo $user->error; ?></p>
</div>
