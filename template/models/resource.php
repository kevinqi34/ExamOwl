<?php
// Include Init Func
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
// Include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');
// include Form Validation
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/user/validation.php');
// Resources -- Create Resource Board
class resource extends db {
  // Protected Database Query
  protected $email;
  // Get Date
  private $date;
  // Get Data
  private $limit;
  private $data = array();
  private $id;

  // Error
  public $error;

  // User Data
  private $user_id;
  private $author;
  private $privileges;


  // Initialize with Date
  public function __construct() {
    $this->date = gmdate('Y-m-d H:i:s');
    parent::__construct();
  }

  // Assigns Resource ID
  public function assign_id($id) {
    if (!is_numeric($id)) {
      return false;
    } else {
      $this->id = $id;
    }
  }

  // Create Menu
  public function create_menu () {
    // Must add new tests through DB, no admin for this feature
    // Grab Data from RESOURCES
    $query = "SELECT * FROM RESOURCES;";
    $data = parent::select_multi($query);
    // Create From Template
    include($_SERVER['DOCUMENT_ROOT'] . '/data/resources/menu.php');
  }

  // Create Header
  public function create_header() {
    //validate
    if (!is_numeric($this->id)) {
      return false;
    } else {
      $query = "SELECT * FROM RESOURCES WHERE ID = '$this->id';";
      $data = parent::select($query);
      // Create Header
      include($_SERVER['DOCUMENT_ROOT'] . '/data/resources/header.php');
    }
  }

  // Post Resource
  public function post_resource() {
    // Get User Info
    $this->email = $_SESSION['email'];
    if ($this->email != null) {
      $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
        // Assign User Data
        $this->author = $data['NAME'];
        $this->user_id = $data['ID'];
      } else {
        return false;
      }
    } else {
      return false;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $title = $_POST["title"];
      $title = str_replace("'","\'", $title);
      $title = str_replace('"','\"', $title);
      $title = word_filter($title);
      $url = $_POST["url"];
      $url = str_replace("'","\'", $url);
      $url = str_replace('"','\"', $url);
      $img_url = $_POST["img-url"];
      $img_url = str_replace("'","\'", $img_url);
      $img_url = str_replace('"','\"', $img_url);

      $error = false;
      // Validate Data
      $val_title = new validation($title);
      $error = $val_title->check_len(1, 200);
      if (!$error) {
        $error = $val_title->check_char();
      }
      if (!$error) {
        // Validate URL
        $val_url = new validation($url);
        $error = $val_url->link_validate();
      }
      if (!$error) {
        $val_img = new validation($img_url);
        $error = $val_img->check_char();
        // Anti Spam
        if (!$error) {
          $anti_spam = new validation($this->date);
          $error = $anti_spam->anti_spam('LINKS', $this->user_id);
        }
      }
      $this->error = $error;
      if (!$error) {
        // Insert Data
        $slug = createSlug($title);
        if ($img_url) {
          // Upload Image
          $img_url = "/images/uploads/" . $this->upload_img($img_url);
          $query = "INSERT INTO LINKS (RESOURCE_ID, CREATE_DATE, TITLE, SLUG, URL, IMG_URL, UPVOTES, AUTHOR, USER_ID) VALUES ('$this->id','$this->date','$title','$slug','$url', '$img_url', 0, '$this->author', '$this->user_id');";
        } else {
          $img_url = "/images/uploads/default.png";
          $query = "INSERT INTO LINKS (RESOURCE_ID, CREATE_DATE, TITLE, SLUG, URL, IMG_URL, UPVOTES, AUTHOR, USER_ID) VALUES ('$this->id','$this->date','$title','$slug','$url', '$img_url', 0, '$this->author', '$this->user_id');";
        }
        if (parent::query($query)) {
          // Update Count
          $query = "UPDATE RESOURCES SET NUM_OF_LINKS = NUM_OF_LINKS + 1 WHERE ID = '$this->id';";
          // Update IQ
          $query2 = "UPDATE USER SET IQ = IQ + 5 WHERE ID = '$this->user_id';";
          if (parent::query($query) && parent::query($query2)) {
            return true;
          } else {
            echo "Failed to update couts.";
            return false;
          }
        } else {
          echo "Failed to Insert Resource";
          return false;
        }
      } else {
        return false;
      }
    }
  }


 //Upload Images
 public function upload_img($url) {
   $name = basename($url);
   file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/images/uploads/' . $name, file_get_contents($url));
   chmod($_SERVER['DOCUMENT_ROOT'] . '/images/uploads/' . $name, 0775);
   return $name;
 }


 //Gets Resource Data
 public function get_resources() {
   $limit = 100;
   $this->limit = $limit;
   $query = "SELECT * FROM LINKS WHERE RESOURCE_ID = '$this->id' ORDER BY UPVOTES DESC LIMIT $limit;";
   $data = parent::select_multi($query);
   if ($data) {
    $this->data = $data;
   } else {
     return false;
   }
 }

 // Display Resources
 public function display_resources() {
   if (sizeof($this->data) > 0) {
       $limit = $this->limit;
       // Create Threads
       include($_SERVER['DOCUMENT_ROOT'] . '/data/resources/resources.php');
    } else {
        echo "No resources found.";
        return false;
    }
 }


 // Upvotes
 public function upvote() {
   // Get User Info
   $this->email = $_SESSION['email'];
   if ($this->email != null) {
     $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
     $data = parent::select($query);
     if ($data) {
       // Assign User Data
       $this->author = $data['NAME'];
       $this->user_id = $data['ID'];
       // Assign Priveleges to admin or sadmin users
       if ($data['USER_TYPE'] == 'admin' || $data['USER_TYPE'] == 'sadmin') {
         $this->privileges = 'admin';
       }
     } else {
       return false;
     }
   } else {
     $this->error = "login";
     return false;
   }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $upvote = $_POST["upvote"];
      $count = $_POST["count"];
      if ($upvote) {
      // Validate Data
      if (!is_numeric($upvote) && !is_numeric($count)) {
        return false;
      } else {
        // Check if user has voted in the Past
        $query = "SELECT * FROM LINKS_VOTES WHERE USER_ID = '$this->user_id' AND LINK_ID = '$upvote';";
        $data = parent::select($query);
        if ($data) {
        $this->error = "Success";
          return false;
        } else {
          // Upvote
          $query = "UPDATE LINKS SET UPVOTES = UPVOTES + 1 WHERE ID = '$upvote';";
          if (parent::query($query)) {
            // Insert into vote history
            $query = "INSERT INTO LINKS_VOTES(USER_ID, LINK_ID) VALUES('$this->user_id','$upvote');";
            if (parent::query($query)) {
             $this->error = "Success";
            } else {
              return false;
            }
          } else {
            return false;
          }
        }
      }
    } else {
      return false;
    }
    } else {
      return false;
    }
 }


 // Downvotes
 public function downvote() {
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $downvote = $_POST["downvote"];
     $count = $_POST["count"];
     if ($downvote) {
     // Validate Data
     if ((!is_numeric($upvote) && !is_numeric($count)) || $count < 1) {
       $this->error = "Success";
       return false;
     } else {
       // Check if user has voted in the Past
       $query = "SELECT * FROM LINKS_VOTES WHERE USER_ID = '$this->user_id' AND LINK_ID = '$downvote';";
       $data = parent::select($query);
       if ($data) {
       $this->error = "Success";
         return false;
       } else {
         // Upvote
         $query = "UPDATE LINKS SET UPVOTES = UPVOTES - 1 WHERE ID = '$downvote';";
         if (parent::query($query)) {
           // Insert into vote history
           $query = "INSERT INTO LINKS_VOTES(USER_ID, LINK_ID) VALUES('$this->user_id','$downvote');";
           if (parent::query($query)) {
           $this->error = "Success";
           } else {
             return false;
           }
         } else {
           return false;
         }
      }
     }
   } else {
     return false;
   }
   } else {
     return false;
   }

 }


 // Pagination
 public function pagination($val, $size) {
   // Validate Data
   if (!is_numeric($this->id) && !is_numeric($val) && !is_numeric($size)) {
     return false;
   } else {
     // Grab Results
     $start = $val * $size;
     $limit = $size;
     $query = "SELECT * FROM LINKS WHERE RESOURCE_ID = '$this->id' ORDER BY UPVOTES DESC LIMIT $start, $size;";
     $data = parent::select_multi($query);
     $this->data = $data;
     // Create Comments
     include($_SERVER['DOCUMENT_ROOT'] . '/data/resources/resources.php');

   }
 }

 // Remove Resources as admin
 public function remove_resource() {
   // Check Connection
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $id = $_POST["remove_link"];
     if ($id) {
       // Validate
       if (!is_numeric($id)) {
         return false;
       } else {
         // Delete File if not default
         $get_img = "SELECT IMG_URL FROM LINKS WHERE ID ='$id';";
         $img_url = parent::select($get_img);
         $img_url = $img_url["IMG_URL"];
         if ($img_url != "/images/uploads/default.png") {
          // Delete file
          unlink($_SERVER['DOCUMENT_ROOT'] . $img_url);
         }
         // Remove Resource
         $query = "DELETE FROM LINKS WHERE ID = '$id';";
         $query2 = "UPDATE RESOURCES SET NUM_OF_LINKS = NUM_OF_LINKS - 1 WHERE ID = '$this->id';";
         if (parent::query($query) && parent::query($query2)) {
           $this->error = "Success";
         } else {
           echo "Resource failed to delete.";
           return false;
         }
       }
     } else {
       return false;
     }
   }
 }

}







?>
