<?php
class database{
  private $server_name;
  private $db_username;
  private $db_password;
  private $db_name;
protected function dbconnection(){
     $this->server_name="sql300.epizy.com";
     $this->db_username="epiz_28812042";
     $this->db_password="J99yU5Vrnvr7S5";
     $this->db_name="epiz_28812042_project1";
     $con=new mysqli($this->server_name,$this->db_username,$this->db_password, $this->db_name);
     if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
   }else {
     return $con;
   }

  }

}



 ?>
