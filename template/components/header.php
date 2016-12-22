<!-- Main Top Navigation bar -->
<div id="navbar">
 <div id="wrapper">

   <!-- Mobile Navigation -->
   <img src="<?php echo url(); ?>images/icons/menu.png" alt="mobile-menu" id="mob-menu">
   <img src="<?php echo url(); ?>images/icons/close.png" alt="mobile-menu" id="close-mob-menu">

   <!-- Insert Site Icon -->
   <a href="<?php echo url(); ?>"><img src="<?php echo url(); ?>images/logo.png" alt="logo"></a>

   <!-- User Accounts -->
   <?php if ( $_SESSION['email'] ) { ?>
   <a class="user" href="<?php echo url(); ?>user/logoff.php">Log Off</a>
   <a class="user" href="<?php echo url(); ?>user/profile.php">Profile</a>
   <?php  } else { ?>
   <a class="user" href="<?php echo url(); ?>user/login.php">Login</a>
   <a class="user" href="<?php echo url(); ?>user/signup.php">Sign Up</a>
   <?php  } ?>
 </div>

</div>
