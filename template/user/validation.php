<?php
// From Validation Class
class validation {
  // Protected User Data
  protected $data;
  // For errors
  private $error;

  public function __construct($data) {
    $this->data = $data;
  }

  // Check Empty
  public function check_empty() {
    if (empty($this->data)) {
      return "An input is required.";
    } else {
      return false;
    }
  }

  // Check Length
  public function check_len($min, $max) {
    if (strlen($this->data) < $min || strlen($this->data) > $max) {
      return "The input must be between " . $min . " and " . $max . " characters.";
    } else {
      return false;
    }

  }

  // Check Characters
  public function check_char() {
    if (!preg_match('/[a-zA-Z0-9\+\/\=$]/',$this->data)) {
      return "No special characters are allowed.";
    } else {
      return false;
    }

  }


  // Check Email
  public function check_mail() {
    if (!filter_var($this->data, FILTER_VALIDATE_EMAIL)) {
          return "Invalid email format.";
    } else {
      return false;
    }
  }

  // General Validate
  public function gen_validate($min, $max) {
    $error = false;
    $error = $this->check_empty();
    if ($error != false) {
      return $error;
    } else {
    $error = $this->check_len($min, $max);
    if ($error != false) {
      return $error;
    } else {
    $error = $this->check_char();
    if ($error != false) {
      return $error;
    } else {
      return false;
    }
    }
    }
  }

  // Email Validate
  public function email_validate() {
    $error = false;
    $error  = $this->check_empty();
    if ($error != false) {
      return $error;
    } else {
      $error = $this->check_mail();
      if ($error != false) {
        return $error;
      } else {
        return false;
      }

    }

  }






}
?>
