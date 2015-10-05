<?php

class sql_db
{
  private $servername = "mydb.cdcdsjovl2rb.us-west-2.rds.amazonaws.com";
  private $username = "rhsu";
  private $password = "tortellini1";
  private $db = "mydb";
  private $conn;

  public function __construct()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function get_connection()
  {
    return $this->conn;
  } 
}
