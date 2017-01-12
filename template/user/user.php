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
        $query = "INSERT INTO USER (NAME, EMAIL, PASSWORD, VERIFY_HASH, CREATE_DATE, STATUS, USER_TYPE) VALUES('$this->name', '$this->email', '$pwd_hash', '$ver_hash', '$this->date' , 'active', 'user')";
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
           $this->error = "Password is wrong. Please try again.";
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


  // User Profile -- Displays User Threads
  public function profile() {
    // Grab User Data
    $email = $_SESSION["email"];
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
        // Create Profile
        include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile_header.php');

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
          if ($data['USER_TYPE'] == 'admin') {
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


 // Manage Users
 public function manage_users() {
   // Get Admins
   $query = "SELECT * FROM USER WHERE USER_TYPE='admin';";
   $this->add_admin();
   $this->remove_admin();
   $data = parent::select_multi($query);
   include($_SERVER['DOCUMENT_ROOT'] . '/data/admin/user.php');

 }


 // Add new admin
 public function add_admin() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_name = $_POST["add_username"];
     if ($user_name) {
       $query = "UPDATE USER SET USER_TYPE = 'admin' WHERE NAME = '$user_name';";
       if (parent::query($query)) {
         $this->error = "User added as admin.";
       } else {
         $this->error = "User not found.";
         return false;
       }
     } else {
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
       $query = "UPDATE USER SET USER_TYPE = 'reg' WHERE ID = '$user_id';";
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


 // Remove and blacklist_user
 public function blacklist_user() {
   



 }





}




?>
