<?php

// Database Class
class db {

  // Protected Database Connection
  protected $connection;

  public function __construct() {
    include($_SERVER['DOCUMENT_ROOT'] . '/configure/configure.php');
    $connection  = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection) {
      echo "failed to connect to database.";
      die("Connection failed: ");
    } else {
     $this->connection = $connection;
    }

  }

  // General Query
  public function query($query) {
    $result = $this->connection->query($query);
    echo $this->error();
    return $result;
  }


  // Select Query
  public function select($query) {
    $result = $this->connection->query($query);
    $rows = array();
    if ($result == false) {
      return false;
    } else {
      while($row = $result->fetch_assoc()) {
        $rows = $row;
      }
      return $rows;
    }

  }

  // Returns Last Error from Database
  public function error() {
    return $this->connection->error;
  }


}



?>
