<?php
// Include Init Func
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
// Include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');
// include Form Validation
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/user/validation.php');
// User Class
class user extends db {
  // Protected Database Query
  protected $name, $email, $password, $c_password;
  // Get Date
  private $date;
  // Admin Variables
  public $num_of_threads;
  public $num_of_comments;
  public $num_of_res;
  public $num_of_votes;
  public $num_of_ver_users;
  public $num_of_dis_users;
  public $num_of_blacklist_users;
  public $num_of_admins;
  // Privelege
  public $privelege;

  // Error
  public $error;


  public function __construct() {
    $this->date = gmdate('Y-m-d H:i:s');
    parent::__construct();
  }
  // For Sign Up
  public function construct_signup($name, $email, $password, $c_password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->c_password = $c_password;
  }

  // For Login
  public function construct_login($email, $password) {
    $this->email = $email;
    $this->password = $password;
  }

  // For Password Reset
  public function construct_email($email) {
    $this->email = $email;
  }

  // Get Email from id
  public function get_email($id) {
    $query = "SELECT EMAIL FROM USER WHERE ID = '$id';";
    $data = parent::select($query);
    $data = $data["EMAIL"];
    return $data;
  }


  // Create User Account
  public function create_user() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Validate Data
      $error = false;
      // Validate Name
      $name = new validation($this->name);
      $error = $name->gen_validate(3,30);
      // Validate Email
      if ($error == false) {
      $email = new validation($this->email);
      $error = $email->email_validate();
      }
      // Validate Password
      if ($error == false) {
      $password = new validation($this->password);
      $error = $password->gen_validate(6,30);
      }
      if ($error == false) {
      $c_password = new validation($this->c_password);
      $error = $c_password->gen_validate(6,30);
      }
      if ($error == false) {
      if ($this->password != $this->c_password) {
        $error = "Passwords don't match.";
      }
      }

      $this->error = $error;
      if ($error != false) {
        return false;
      } else {
        // Create new user
        $ver = $this->randomPassword();
        $ver_hash = password_hash($ver, PASSWORD_DEFAULT);
        $pwd_hash = password_hash($this->password, PASSWORD_DEFAULT);
        // If all values pass validation, create new user
        $query = "INSERT INTO USER (NAME, EMAIL, PASSWORD, VERIFY_HASH, CREATE_DATE, STATUS, USER_TYPE, IQ) VALUES('$this->name', '$this->email', '$pwd_hash', '$ver_hash', '$this->date' , 'active', 'user', 0)";
        if (parent::query($query)) {
        // Send Welcome Mail
        $this->welcome_mail($this->name, $this->email, $ver_hash);
        // Set Session Values
        $user_browser =  $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['email'] = $this->email;
        $_SESSION['login_string'] = hash('sha256', $pwd_hash . $user_browser);
        }
      }
    } else {
      return false;
    }

  }


  // Login User
  public function login() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // validation
    $error = false;
    // Validate Email
    $email = new validation($this->email);
    $error = $email->email_validate();
    // Validate Password
    if ($error == false) {
    $password = new validation($this->password);
    $error = $password->gen_validate(6,30);
    }

    $this->error = $error;
    if ($error != false) {
      return false;
    } else {
    // login user
    $get_data = "SELECT EMAIL, PASSWORD, STATUS FROM USER WHERE EMAIL = '$this->email'";
    $data = parent::select($get_data);
    if ($data != false) {
    if (password_verify($this->password, $data["PASSWORD"]) && $data["STATUS"] == 'active') {
    $query = "UPDATE USER SET LAST_LOGON_DATE = '$this->date' WHERE EMAIL = '$this->email'";
    parent::query($query);
    if (parent::query($query) != false) {
      // Set Session Values
      $user_browser =  $_SERVER['HTTP_USER_AGENT'];
      $_SESSION['email'] = $this->email;
      $_SESSION['login_string'] = hash('sha256', $data["PASSWORD"] . $user_browser);

        }
         } else {
           // If disabled
           if ($data["STATUS"] == 'disabled') {
             $this->error = "Your account has been disabled and is unreachable. Please check your email.";
           } else {
             $this->error = "Password is wrong. Please try again.";
           }
         }
       } else {
           $this->error = "Invalid Email Address. Please try again.";
       }

     }
     } else {
        return false;
     }


  }


  // Reset Password
  public function reset_password() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // validation
        $error = false;
        // Validate Email
        $email = new validation($this->email);
        $error = $email->email_validate();

        $this->error = $error;
        if ($error != false) {
          return false;
        } else {
          // Check if email exists
          $query = "SELECT EMAIL, NAME FROM USER WHERE EMAIL = '$this->email'";
          $data = parent::select($query);
          $email_check = $data["EMAIL"];
          if ($email_check == $this->email) {
            // Send Email
            $this->pwd_reset_email($data["NAME"],$this->email);
            $this->error = "Your password has been reset. Please check your email.";
          } else {
            $this->error = "No account is associated with this email address.";
          }

        }

      } else {
        return false;
      }




  }


  // User settings
  public function user_settings() {
    // Grab Variables
    $email = $_SESSION["email"];
    $name = $_POST["new_user"];
    $password = $_POST["new_pwd"];
    $c_password= $_POST["new_pwd_c"];
    // Assign Variables
    $this->construct_signup($name, $email, $password, $c_password);

    // Change username
    if ($name != null) {
      $this->change_username();
    } else if ($password != null) {
      // Change Password
      $this->change_password();
    } else {
      return false;
    }

  }


  // Change Username
  public function change_username() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Validate Data
      $error = false;
      // Validate Name
      $name = new validation($this->name);
      $error = $name->gen_validate(3,30);
      $this->error = $error;
      if ($error != false) {
        // Exit if error
        return false;
      } else {
        // Update Username
        $query = "UPDATE USER SET NAME = '$this->name' WHERE EMAIL = '$this->email';";
        if (parent::query($query)) {
          $this->error = "Username successfully changed";
        } else {
          return false;
        }
      }
    } else {
      return false;
    }


  }


  // Change Password
  public function change_password() {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Data
    $error = false;
    // Validate Email
    if ($error == false) {
    $email = new validation($this->email);
    $error = $email->email_validate();
    }
    // Validate Password
    if ($error == false) {
    $password = new validation($this->password);
    $error = $password->gen_validate(6,30);
    }
    if ($error == false) {
    $c_password = new validation($this->c_password);
    $error = $c_password->gen_validate(6,30);
    }
    if ($error == false) {
    if ($this->password != $this->c_password) {
      $error = "Passwords don't match.";
    }
    }

    $this->error = $error;
    if ($error != false) {
      return false;
    } else {
      $pwd_hash = password_hash($this->password, PASSWORD_DEFAULT);
      $query = "UPDATE USER SET PASSWORD = '$pwd_hash', LAST_REST_DATE = '$this->date', STATUS = 'active' where email = '$this->email'";
      if (parent::query($query)) {
        // Set Session Values
        $user_browser =  $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['email'] = $this->email;
        $_SESSION['login_string'] = hash('sha256', $data["PASSWORD"] . $user_browser);
        $this->error = "Password successfully changed";

      } else {
        return false;
      }
    }
  } else {
    return false;
  }


  }

  // Random Password Generator
  public function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 15; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }


  // Welcome Mail
  function welcome_mail($name,$email,$pwd_hash) {
    $url=   url() . "user/confirm_email.php?e=" . $email. "&id=" . $pwd_hash;
    $to = $email;
    $subject = "Welcome to Exam Owl";
    $msg="";
    $msg=$msg . "<p>Dear " . $name . ",</p>";
    $msg=$msg . "<p>Welcome to the exam preparation community.</p>";
    $msg=$msg . "<p>Featuring an active community and an extensive suite of tools designed to help test takers of all levels.</p>";
    $msg = $msg . "<p>Please verify your email address by clicking <a href='" . $url . "'>here</a>.</p>";
    $msg = $msg . "<p>-- The Exam Owl Team</p>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: support@spere.io" . "\r\n";
    mail($to,$subject,$msg,$headers);
    return true;
   }

   // Password Reset Mail
   function pwd_reset_email($name,$email) {
      $to = $email;
      $subject = "Your Password has been reset.";
      $url= url() . "user/reset_form.php?e=" . $email;
      $msg = "
      <html>
      <head>
      <title>Your Exam Owl Password was Reset</title>
      </head>
      <body>
      <p>Dear&nbsp;";
      $msg=$msg. $name . ",</p>
      <p>Your Password was just reset. Please click <a href='". $url . "'>here</a> to change your password. </p>";
      $msg=$msg . "<p>Thanks,</p>
      <p>-- The Exam Owl Team</p>
      </body>
      </html>
      ";
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: support@spere.io" . "\r\n";
      mail($to,$subject,$msg,$headers);
      return true;
  }


  // User Ban Mail
  function banned_email($name, $email) {
    $to = $email;
    $subject = "You have been banned. Get out of Exam Owl.";
    $msg = "
    <html>
    <head>
    <title>Your Exam Owl Account has been banned for spamming.</title>
    </head>
    <body>
    <p>Dear&nbsp;";
    $msg=$msg. $name . ",</p>
    <p>Your Account has been banned. Get out of our community TROLL.</p>";
    $msg=$msg . "<p>Good Riddance,</p>
    <p>-- The Exam Owl Team</p>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: support@spere.io" . "\r\n";
    mail($to,$subject,$msg,$headers);
    return true;
  }

  // User Disabled Mail
  function disabled_email($name, $email) {
    $to = $email;
    $subject = "Your Exam Owl account has been disabled.";
    $msg = "
    <html>
    <head>
    <title>Your Exam Owl Account has been disabled for spamming.</title>
    </head>
    <body>
    <p>Dear&nbsp;";
    $msg=$msg. $name . ",</p>
    <p>Your Account has been disabled.</p>
    <p>To appeal for re-enablement, reply to this email with an explanation for your spamming behaviour.</p>";
    $msg=$msg . "<p>Sincerely,</p>
    <p>-- The Exam Owl Team</p>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: support@spere.io" . "\r\n";
    mail($to,$subject,$msg,$headers);
    return true;
  }


  // User Profile -- Displays User Threads
  public function profile($email) {
    // Establish Privileges
    // Grab User Data
    $session_email = $_SESSION["email"];
    // Validate
    $error = false;
    $val_email = new validation($session_email);
    $error = $val_email->check_mail();
    if (!$error) {
      // Grab Data
      $query = "SELECT * FROM USER WHERE EMAIL = '$session_email';";
      if (parent::select($query)) {
        $user_data = parent::select($query);
        // Set Variables
        $this->email = $session_email;
        $this->privelege = $user_data["USER_TYPE"];
        // Determine if own data or others
        // Own Profile
        if (!$email) {
          $user_id = $user_data["ID"];
          // Grab Thread Data
          $query = "SELECT * FROM THREADS WHERE USER_ID = '$user_id';";
          $thread_data = parent::select_multi($query);
          date_default_timezone_set ( "UTC" );
          $date = time_elapsed_string($user_data["CREATE_DATE"]);
          $size = sizeof($thread_data);
          $is_user = true; // Determines that this isn't the same user
          // Create Profile
          include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/profile_template.php');
        } else { // Return Other Profiles
          // Validate
          $error = false;
          $val_email = new validation($email);
          $error = $val_email->check_mail();
          if (!$error) {
            // Grab Data
            $query = "SELECT * FROM USER WHERE EMAIL = '$email';";
            if (parent::select($query)) {
              $user_data = parent::select($query);
              $user_id = $user_data["ID"];
              // Grab Thread Data
              $query = "SELECT * FROM THREADS WHERE USER_ID = '$user_id';";
              $thread_data = parent::select_multi($query);
              date_default_timezone_set ( "UTC" );
              $date = time_elapsed_string($user_data["CREATE_DATE"]);
              $size = sizeof($thread_data);
              $is_user = false; // Determines that this isn't the same user
              // Create Profile
              include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/profile_view_template.php');
            } else {
                echo "Data not recieved.";
                return false;
            }
          } else {
              echo "Email not valid.";
              return false;
          }
        }
      } else {
          echo "Data not recieved.";
          return false;
      }
    } else {
      $this->error = $error;
      return false;
    }
  }


  public function profile_remove_threads() {
    // Check Email
    // Grab User Data
    $email = $_SESSION["email"];
    // Validate
    $error = false;
    $val_email = new validation($email);
    $error = $val_email->check_mail();
    if (!$error) {
    // Check Connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST['remove_thread'];
      $cat_id = $_POST['remove_cat'];
      if ($id != null) {
        // Validate
        if (!is_numeric($id)) {
          return false;
        } else {
          // Remove Category
          $query = "DELETE FROM THREADS WHERE ID = '$id';";
          $query2 = "DELETE FROM COMMENTS WHERE THREAD_ID = '$id';";
          if (parent::query($query) && parent::query($query2)) {
            $query = "UPDATE CATEGORY SET NUM_OF_POSTS = NUM_OF_POSTS - 1 WHERE ID = '$cat_id';";
            if (parent::query($query)) {
              $this->error = "Success";
              return true;
            } else {
              echo "Failed to update Categories.";
              return false;
            }
          } else {
            echo "Failed to delete thread.";
            return false;
          }
        }
      } else {
        return false;
      }

    } else {
      return false;
    }

  } else {
    return false;
  }
  }


  // Admin
  public function admin () {
    // if admin privilege, return user table
    $this->email = $_SESSION['email'];
    // check if null
    if ($this->email != null) {
      $query = "SELECT USER_TYPE FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
          if ($data['USER_TYPE'] == 'admin' || $data['USER_TYPE'] == 'sadmin') {
            // Get Num of Comments
            $query  = "SELECT COUNT(ID) FROM USER WHERE VERIFIED = 1;";
            $num_of_ver_users = parent::select($query);
            $this->num_of_ver_users = $num_of_ver_users["COUNT(ID)"];
            // Get Num of Threads
            $query  = "SELECT COUNT(ID) FROM THREADS;";
            $num_of_threads = parent::select($query);
            $this->num_of_threads = $num_of_threads["COUNT(ID)"];
            // Get Num of Comments
            $query  = "SELECT COUNT(ID) FROM COMMENTS;";
            $num_of_comments = parent::select($query);
            $this->num_of_comments = $num_of_comments["COUNT(ID)"];
            // Get Num of Res
            $query  = "SELECT COUNT(ID) FROM LINKS;";
            $num_of_res = parent::select($query);
            $this->num_of_res = $num_of_res["COUNT(ID)"];
            // Get Num of Votes
            $query  = "SELECT COUNT(ID) FROM LINKS_VOTES;";
            $num_of_votes = parent::select($query);
            $this->num_of_votes = $num_of_votes["COUNT(ID)"];
            // Get Num of Disabled Users
            $query  = "SELECT COUNT(ID) FROM USER WHERE STATUS = 'disabled';";
            $num_of_dis_users = parent::select($query);
            $this->num_of_dis_users = $num_of_dis_users["COUNT(ID)"];
            // Get Num of Banned Users
            $query  = "SELECT COUNT(ID) FROM USER_BLACKLIST";
            $num_of_blacklist_users = parent::select($query);
            $this->num_of_blacklist_users = $num_of_blacklist_users["COUNT(ID)"];
            // Get Num of Admins
            $query  = "SELECT COUNT(ID) FROM USER WHERE USER_TYPE = 'admin';";
            $num_of_admins = parent::select($query);
            $this->num_of_admins = $num_of_admins["COUNT(ID)"];

            $query = "SELECT * FROM USER ORDER BY CREATE_DATE DESC;";
            $user_table = parent::select_multi($query);
            return $user_table;
          } else {
            return false;
          }
      } else {
        return false;
      }
    } else {
      return false;
    }
  }




 // Disable Users
 public function disable_users() {
   // Add Logic
   $this->disable();
   // Reverse
   $this->undisable();
   // Display
   // Get Data
   $query = "SELECT * FROM USER WHERE STATUS = 'disabled';";
   $data = parent::select_multi($query);
   include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/disable_user.php');
 }

 // Disable logic
 public function disable() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["disable_user"];
     // Validate
     // Exclude Sadmin
     $query = "SELECT USER_TYPE FROM USER WHERE ID = '$user_id';";
     $user_type = parent::select($query);
     $user_type = $user_type["USER_TYPE"];
     if ($user_type == "sadmin") {
       $user_id = null;
     }
     if ($user_id) {
       if (!is_numeric($user_id)) {
         return false;
       } else {
         // Begin Disable Process
         // Check if user exists
         $query = "SELECT * FROM USER WHERE ID = '$user_id';";
         $user_data = parent::select($query);
         if ($user_data) {
           // Grab User Variables
           $user_name = $user_data["NAME"];
           $user_email = $user_data["EMAIL"];
           // Disable User and Send Email
           $query = "UPDATE USER SET STATUS = 'disabled' WHERE ID = '$user_id';";
           if (parent::query($query) && $this->disabled_email($user_name, $user_email)) {
             echo "User disabled successfully.";
             // Create Output Buffer
             ob_start();

             // Return User Comments, Threads and Resources
             $get_comments = "SELECT * FROM COMMENTS WHERE USER_ID = '$user_id';";
             $data = parent::select_multi($get_comments);
             include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_comments.php';
             // Return User Threads
             $get_threads = "SELECT * FROM THREADS WHERE USER_ID = '$user_id';";
             $data = parent::select_multi($get_threads);
             include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_threads.php';
             // Return User Res
             $get_res = "SELECT * FROM LINKS WHERE USER_ID = '$user_id';";
             $data = parent::select_multi($get_res);
             include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_res.php';
             // Assign Content
             $content = ob_get_contents();
             // Clear Output Buffer
             ob_end_clean();

             // Write to database
             $this->write_database($user_name . '_' . $user_id, $content, "disabled");

           } else {
             $this->error = "User failed to be disabled.";
             return false;
           }

         } else {
           $this->error = "This user doesn't exist.";
           return false;
         }
       }
     } else {
       return false;
     }
   } else {
     return false;
   }

 }


 // Undisable users
 public function undisable() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["undisable_user"];
     if ($user_id) {
       // Get Data
       $query  = "SELECT * FROM USER WHERE ID = '$user_id';";
       $data = parent::select($query);
       $user_name = $data["NAME"];
       // Undisable
       $query = "UPDATE USER SET STATUS = 'active' WHERE ID = '$user_id';";
       if (parent::query($query)) {
         echo "User undisabled";
         // Remove From User Records
         $url = "user_records/disabled_user_" . $user_name . '_' . $user_id . '.html';

         $query = "DELETE FROM USER_RECORDS WHERE SLUG = '$url';";
         if (parent::query($query)) {
           //echo "User data updated.";
         } else {
           echo "Unable to update user table.";
           return false;
         }

       } else {
         echo "User not undisabled.";
         return false;
       }

     } else {
       return false;
     }
   } else {
     return false;
   }
 }


 // Manage Users
 public function manage_users() {
   // Get Admins
   $query = "SELECT * FROM USER WHERE USER_TYPE='admin';";
   // Admin Logic
   $this->add_admin();
   $this->remove_admin();
   // Display Data
   $data = parent::select_multi($query);
   include($_SERVER['DOCUMENT_ROOT'] . '/data/admin/user.php');

 }


 // Add new admin
 public function add_admin() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["add_username"];
     // Validation
     // Exclude Sadmin
     $query = "SELECT USER_TYPE FROM USER WHERE ID = '$user_id';";
     $user_type = parent::select($query);
     $user_type = $user_type["USER_TYPE"];
     if ($user_type == "sadmin") {
       $user_id = null;
     }
     // Update Users
     if ($user_id) {
       $query = "UPDATE USER SET USER_TYPE = 'admin' WHERE ID = '$user_id';";
       if (parent::query($query)) {
         $this->error = "User added as admin.";
       } else {
         $this->error = "User not found.";
         return false;
       }
     } else {
       $this->error = "User ID invalid.";
       return false;
     }
   } else {
     return false;
   }
 }

 // Remove admin
 public function remove_admin() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["remove_user"];
     if ($user_id) {
       $query = "UPDATE USER SET USER_TYPE = 'user' WHERE ID = '$user_id';";
       if (parent::query($query)) {
         $this->error = "User removed as admin.";
       } else {
         $this->error = "User not removed.";
         return false;
       }
     } else {
       return false;
     }
   } else {
     return false;
   }
 }



 // Delete User
 public function blacklist() {
   // Add logic
   $this->blacklist_user();
   // Display
   include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/delete_user.php');

 }


 // Remove and blacklist_user
 public function blacklist_user() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["blacklist_user"];
     // Validate
     if ($user_id) {
       if (!is_numeric($user_id)) {
         return false;
       } else {
         // Begin Blacklist Process
         // Check if user exists
         $query = "SELECT * FROM USER WHERE ID = '$user_id';";
         $user_data = parent::select($query);
         if ($user_data) {
           // Grab User Variables
           $user_name = $user_data["NAME"];
           $user_email = $user_data["EMAIL"];

           // Add User to Blacklist
           $query = "INSERT INTO USER_BLACKLIST (EMAIL) VALUES ('$user_email');";
           if (parent::query($query)) {
             // Delete User and Send Angry Email
             $delete_user = "DELETE FROM USER WHERE ID = '$user_id';";
             if(parent::query($delete_user) && $this->banned_email($user_name, $user_email)) {
               echo "User Succesfully Deleted";

               // Create Output Buffer
               ob_start();

               // Return User Comments, Threads and Resources
               $get_comments = "SELECT * FROM COMMENTS WHERE USER_ID = '$user_id';";
               $data = parent::select_multi($get_comments);
               include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_comments.php';
               // Return User Threads
               $get_threads = "SELECT * FROM THREADS WHERE USER_ID = '$user_id';";
               $data = parent::select_multi($get_threads);
               include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_threads.php';
               // Return User Res
               $get_res = "SELECT * FROM LINKS WHERE USER_ID = '$user_id';";
               $data = parent::select_multi($get_res);
               include $_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/deleted_user_res.php';
               // Assign Content
               $content = ob_get_contents();
               // Clear Output Buffer
               ob_end_clean();

               // Write to File
               $this->write_file($user_name . '_' . $user_id, $content, 'deleted');

             } else {
               echo "User failed to delete";
             }
           } else {
            $this->error = "User failed to insert into Blacklist";
            return false;
           }
         } else {
           echo "User not found.";
           return false;
         }
       }
     } else {
       return false;
     }
   } else {
     return false;
   }
 }


 // Creates a file in the user records folder to keep deleted User Records
 private function write_file($name, $content, $type) {
    // Create file name
    $filename = $_SERVER['DOCUMENT_ROOT'] . '/user_records/' . $type . '_user_' . $name . '.html';
    // Open File
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    // Write file
    fwrite($myfile, $content);
    // Close File
    fclose($myfile);

    // Save URL to DB
    $slug = 'user_records/' . $type . '_user_' . $name . '.html';
    $query = "INSERT INTO USER_RECORDS (SLUG) VALUES ('$slug');";
    if (parent::query($query)) {
      return true;
    } else {
      $this->error = "Error inserting slug to DB.";
      return false;
    }

 }

 // Creates user record in database
 private function write_database($name, $content, $type) {
   echo $name;
   


 }



 // Returns Public Offenders List
 public function return_offenders($privelege) {
    // Check if admin
    if ($privelege == 'admin') {
      // Get Data
      $query = "SELECT * FROM USER_RECORDS";
      $data = parent::select_multi($query);
      return $data;
    } else {
      return false;
    }
 }


}
?>
