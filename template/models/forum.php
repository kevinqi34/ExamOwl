<?php
// Include Init Func
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
// Include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');
// include Form Validation
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/user/validation.php');
// Categories - Grabs Top Categories
class category extends db {
  // Protected Database Query
  protected $email;
  // Get Date
  private $date;
  // Get Data
  private $data = array();

  // Error
  public $error;

  // Initialize with Date
  public function __construct() {
    $this->date = gmdate('Y-m-d H:i:s');
    parent::__construct();
  }

  // Check for Admin Account - Load Admin Functionality
  public function admin() {
    $this->email = $_SESSION['email'];
    // check if null
    if ($this->email != null) {
      $query = "SELECT USER_TYPE FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
          if ($data['USER_TYPE'] == 'admin') {
            // Good to go
            $this->add_category();
            // To Powerful, disabled for safety
            //$this->remove_category();
            include($_SERVER['DOCUMENT_ROOT'] . '/data/admin/category.php');

          }

      } else {
        return false;
      }
    } else {
      return false;
    }

  }

  // Return Categories from Database
  public function return_categories() {
    $query = "SELECT * FROM CATEGORY;";
    $data = parent::select_multi($query);
    if ($data) {
     $this->data = $data;
    } else {
      return false;
    }
  }

  // Display Categories
  public function display_categories($option) {
    if (sizeof($this->data) > 0) {
      if ($option == "admin") {
        include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/category_admin.php');
      } else if ($option == "home") {
        include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/category.php');
      } else {
        return false;
      }
    } else {
      echo "No Categories Found.";
      return false;
    }
  }

  // Add New Category
  public function add_category() {
    // Check Connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $cat_name = $_POST['name'];
      if ($cat_name != null) {
        // Validate Data
        $error = false;
        // Validate Name
        $name = new validation($cat_name);
        $error = $name->check_char();
        $this->error = $error;
        if (!$error) {
          $slug = createSlug($cat_name);
          $img_url = "/images/forum/category/" . $slug . ".png";
          $query = "INSERT INTO CATEGORY (NAME, SLUG, CREATE_DATE, NUM_OF_POSTS, ICON_URL) VALUES('$cat_name', '$slug', '$this->date', 0, '$img_url');";
          if (!parent::query($query)) {
            return false;
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

  // Remove Category
  public function remove_category() {
    // Check Connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST['remove_category'];
      if ($id != null) {
        // Validate
        if (!is_numeric($id)) {
          return false;
        } else {
          // Remove Category
          $query = "DELETE FROM CATEGORY WHERE ID = '$id';";
          if (parent::query($query)) {
            echo "Success";
          } else {
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

}

// Threads - Creates Threads Based on Categories
class thread extends db {
  // Protected Database Query
  protected $email;
  // Get Date
  private $date;
  // Get Data
  private $data = array();
  private $limit;
  // Category Variables
  private $cat_name;
  private $cat_id;
  private $cat_title;
  private $cat_slug;
  // User Data
  private $author;
  private $user_id;
  public $privileges;

  // Error
  public $error;

  // Initialize with Date and Category
  public function __construct($cat_id) {
    $this->date = gmdate('Y-m-d H:i:s');
    $this->cat_id = $cat_id;
    parent::__construct();
  }

  // Returns Header
  public function create_header() {
    $error  = false;
    // Validation
    $cat_id = new validation($this->cat_id);
    $error = $cat_id->check_char();
    $this->error = $error;
    // Set Category ID
    if (!$error) {
    $query = "SELECT * FROM CATEGORY WHERE ID = '$this->cat_id';";
    $id = parent::select($query);
    $this->cat_title = $id['NAME'];
    $this->cat_slug = $id['SLUG'];
    $data = $id;
    // Create Header Template
    include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/thread_header.php');
    } else {
      return false;
    }


  }

  // Returns Threads From Database
  public function return_threads() {
    $limit = 20;
    $this->limit = $limit;
    $query = "SELECT * FROM THREADS WHERE CAT_ID = '$this->cat_id' ORDER BY TYPE DESC, CREATE_DATE DESC LIMIT $limit;";
    $data = parent::select_multi($query);
    if ($data) {
     $this->data = $data;
    } else {
      return false;
    }
  }

  // Displays Threads
  public function display_threads() {
    if (sizeof($this->data) > 0) {
        $limit = $this->limit;
        // Create Threads
        include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/thread.php');
    } else {
      echo "No threads found.";
      return false;
    }
  }

  // Creates a Thread
  public function create_thread() {
    // Check if User is Admin
    $this->email = $_SESSION['email'];
    // check if null
    if ($this->email != null) {
      $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
          $this->author = $data['NAME'];
          $this->user_id = $data['ID'];
          if ($data['USER_TYPE'] == 'admin') {
            // Good to Go -- Unlock Admin Features
            $this->privileges = 'admin';
          }
      } else {
        return false;
      }
    } else {
      return false;
    }

    // Post Data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $category_id = $_POST['cat-id'];
      $thread_title = $_POST['title'];
      $thread_title = str_replace("'","\'", $thread_title);
      $thread_title = str_replace('"','\"', $thread_title);
      $thread_text = $_POST['text'];
      $thread_text = str_replace("'","\'", $thread_text);
      $thread_text = str_replace('"','\"', $thread_text);
      $thread_option = $_POST['option'];
      $error = false;
      // Validate Data
      $title = new validation($thread_title);
      $error = $title->check_len(1, 100);
      if (!$error) {
        $error = $title->check_char();
      }
      $this->error = $error;
      if (!$error) {
        $slug = createSlug($thread_title);
        if ($thread_option) {
          $query = "INSERT INTO THREADS (CAT_ID, USER_ID, TITLE, SLUG, CREATE_DATE, AUTHOR, CONTENT, TYPE, NUM_OF_COMMENTS) VALUES ('$category_id', '$this->user_id', '$thread_title', '$slug', '$this->date', '$this->author', '$thread_text','$thread_option', '0');";
        } else {
          $query = "INSERT INTO THREADS (CAT_ID, USER_ID, TITLE, SLUG, CREATE_DATE, AUTHOR, CONTENT, NUM_OF_COMMENTS) VALUES ('$category_id', '$this->user_id', '$thread_title', '$slug', '$this->date', '$this->author', '$thread_text', '0');";
          echo $query;
        }
        if (parent::query($query)) {
          // Update Category Post Count
          $query = "UPDATE CATEGORY SET NUM_OF_POSTS = NUM_OF_POSTS + 1, LATEST_POST = '$thread_title', LATEST_POST_DATE = '$this->date' WHERE ID = '$category_id';";
          if (parent::query($query)) {
            return true;
          } else {
            $this->error = "Category count not updated properly.";
            return false;
          }
        } else {
          $this->error = "Thread not inserted properly.";
          return false;
        }
      } else {
        return false;
      }
    }
  }

  // Delete Threads
  public function delete_threads() {
    // Check if User is Admin
    $this->email = $_SESSION['email'];
    // check if null
    if ($this->email != null) {
      $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
          $this->author = $data['NAME'];
          $this->user_id = $data['ID'];
          if ($data['USER_TYPE'] == 'admin') {
            // Good to Go -- Unlock Admin Features
            $this->privileges = 'admin';
          }
      } else {
        return false;
      }
    } else {
      return false;
    }

    // Check Connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST['remove_thread'];
      if ($id != null) {
        // Validate
        if (!is_numeric($id)) {
          return false;
        } else {
          // Remove Category
          $query = "DELETE FROM THREADS WHERE ID = '$id';";
          $query2 = "DELETE FROM COMMENTS WHERE THREAD_ID = '$id';";
          if (parent::query($query) && parent::query($query2)) {
            $query = "UPDATE CATEGORY SET NUM_OF_POSTS = NUM_OF_POSTS - 1 WHERE ID = '$this->cat_id';";
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


  }

  // pagination
  public function pagination($val, $size) {
    // Validate Data
    if (!is_numeric($this->cat_id) && !is_numeric($val) && !is_numeric($size)) {
      return false;
    } else {
      // Grab Results
      $start = $val * $size;
      $limit = $size;
      $query = "SELECT * FROM THREADS WHERE CAT_ID = '$this->cat_id' ORDER BY TYPE DESC, CREATE_DATE DESC LIMIT $start, $size;";
      $data = parent::select_multi($query);
      $this->data = $data;
      // Create Comments
      include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/thread.php');
    }




  }

}


// Posts - For Displaying Threads
class post extends db {
  // Protected Database Query
  protected $email;
  // Get Date
  private $date;
  // Get Data
  private $data = array();
  // Thread Variables
  private $thread_name;
  private $thread_id;
  // Category Variables
  private $cat_id;
  private $cat_name;
  private $cat_slug;
  // User Variables
  private $user_id;
  private $user_name;
  private $privileges;

  // Error
  public $error;


  // Initialize with Date and Thread
  public function __construct($thread_name, $thread_id) {
    $this->date = gmdate('Y-m-d H:i:s');
    $this->thread_name = $thread_name;
    $this->thread_id = $thread_id;
    parent::__construct();
  }

  // Returns Header
  public function create_header() {
    if (!$this->error) {
    $error  = false;
    // Validation
    $thread_name = new validation($this->thread_name);
    $error = $thread_name->check_char();
    $this->error = $error;
    }
    // Set Category ID's
    if (!$error) {
    $query = "SELECT * FROM THREADS WHERE ID = '$this->thread_id';";
    $id = parent::select($query);
    $this->cat_id = $id["CAT_ID"];

    $query = "SELECT * FROM CATEGORY WHERE ID = '$this->cat_id';";
    $category = parent::select($query);
    $this->cat_name = $category["NAME"];
    $this->cat_slug = $category["SLUG"];
    // Create Header Template
    include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/post_header.php');
    } else {
      return false;
    }


  }

  // Returns Footer
  public function create_footer() {
    include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/post_footer.php');

  }


  // Return Comments
  public function display_comments() {
    //validate
    if (!is_numeric($this->thread_id)) {
      return false;
    } else {
      $limit = 30;
      $query = "SELECT * FROM COMMENTS WHERE THREAD_ID = '$this->thread_id' ORDER BY CREATE_DATE LIMIT $limit;";
      $data = parent::select_multi($query);
      // Create Comments
      include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/comment.php');
      return true;
    }

  }

  // Post Response
  public function comment() {
      // Redirect Variable
      $redirect = false;
      // Check login status
      $this->email = $_SESSION['email'];
      // check if null
      if ($this->email == null) {
        $redirect = true;
      } else {
        // Get User Data
        $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
        $user = parent::select($query);
        $this->user_id = $user["ID"];
        $this->user_name = $user["NAME"];
      }
      // Start Post
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($redirect) {
          // Redirect
          $this->error = "Redirect";
          return false;
        } else {
          // Get Variables
          $text = $_POST['text'];
          // Validate Data
          $error = false;
          $comment_body = new validation($text);
          $error = $comment_body->check_empty();
          if (!$error) {
            $error = $comment_body->check_char();
          }
          if ($error) {
            $this->error = $error;
          } else {
            $text = str_replace("'","\'", $text);
            $text = str_replace('"','\"', $text);
            // Update Comment
            $query  = "INSERT INTO COMMENTS (THREAD_ID, CAT_ID, USER_ID, CONTENT, AUTHOR, CREATE_DATE) VALUES ('$this->thread_id', '$this->cat_id', '$this->user_id', '$text', '$this->user_name', '$this->date'); ";
            if (parent::query($query)) {
              // Update Thread Table
              $query = "UPDATE THREADS SET NUM_OF_COMMENTS = NUM_OF_COMMENTS + 1, LATEST_COMMENT_DATE = '$this->date', LATEST_COMMENT_AUTHOR = '$this->user_name' WHERE ID = '$this->thread_id';";
              if (parent::query($query)) {
                $this->error = "Success";
                return true;
              } else {
                echo "Thread count faild to update.";
                return false;
              }
            } else {
              echo "Comment failed to insert.";
              return false;
            }
          }
        }
      }


  }

  // Delete Comments
  public function delete_comment() {
    // Check if User is Admin
    $this->email = $_SESSION['email'];
    // check if null
    if ($this->email != null) {
      $query = "SELECT * FROM USER WHERE EMAIL = '$this->email';";
      $data = parent::select($query);
      if ($data) {
          $this->author = $data['NAME'];
          $this->user_id = $data['ID'];
          if ($data['USER_TYPE'] == 'admin') {
            // Good to Go -- Unlock Admin Features
            $this->privileges = 'admin';
          }
      } else {
        return false;
      }
    } else {
      return false;
    }

    // Check Connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST['remove_comment'];
      if ($id != null) {
        // Validate
        if (!is_numeric($id)) {
          return false;
        } else {
          // Remove Comment
          $query = "DELETE FROM COMMENTS WHERE ID = '$id';";
          $query2 = "UPDATE THREADS SET NUM_OF_COMMENTS = NUM_OF_COMMENTS - 1 WHERE ID = '$this->thread_id';";
          if (parent::query($query) && parent::query($query2)) {
            $this->error = $success;
            return true;
          } else {
            echo "Comment not deleted";
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


  // pagination
  public function pagination($val, $size) {
    // Validate Data
    if (!is_numeric($this->thread_id) && !is_numeric($val) && !is_numeric($size)) {
      return false;
    } else {
      // Grab Results
      $start = $val * $size;
      $limit = $size;
      $query = "SELECT * FROM COMMENTS WHERE THREAD_ID = '$this->thread_id' ORDER BY CREATE_DATE LIMIT $start, $size;";
      $data = parent::select_multi($query);
      // Create Comments
      include($_SERVER['DOCUMENT_ROOT'] . '/data/forum/comment.php');
    }




  }





}



?>
