<!-- Include User Logic -->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/user/reset_password.php')?>

<div id="user">
  <h1>Reset Password</h1>
  <form method="post" action="?redirect=true">
    <input value="<?php echo $email; ?>" type="text" id="email" name="email" placeholder="Email Address" required />
    <button type="submit" value="reset_password">Reset</button>
  </form>
  <p id ="error" ><?php echo $user->error; ?></p>
</div>
