<!-- Include User Logic -->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/user/signup.php')?>

<div id="user">
  <h1>Sign Up</h1>
  <form method="post" action="?redirect=true">
    <input value="<?php echo $name; ?>" type="text" id="name" name="name" placeholder="Name" required />
    <input value="<?php echo $email; ?>" type="text" id="email" name="email" placeholder="Email Address" required />
    <input value="<?php echo $password; ?>" type="password" id="password" name="password" placeholder="Password" required />
    <input value="<?php echo $c_password; ?>" type="password" id="c_password" name="c_password" placeholder="Confirm Password" required />
    <button type="submit" value="sign up">Sign up</button>
  </form>
  <p id ="error" ><?php echo $user->error; ?></p>
</div>
