<!-- Include User Logic -->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/user/reset_form.php')?>

<div id="user">
  <h1>Reset Password</h1>
  <form method="post" action="?redirect=true">
    <input value="<?php echo $post_email; ?>" type="hidden" id="email" name="email" />
    <input value="<?php echo $password; ?>" type="password" id="password" name="password" placeholder="Password" required />
    <input value="<?php echo $c_password; ?>" type="password" id="c_password" name="c_password" placeholder="Confirm Password" required />
    <button type="submit" value="Login">Reset</button>
  </form>
  <p id ="error" ><?php echo $user->error; ?></p>
</div>
