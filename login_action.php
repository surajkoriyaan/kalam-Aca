<?php
session_start();
if (!isset($_SESSION['uname'])) {
  ?>
  <script type="text/javascript">
    window.location="login.html";
  </script>
  <?php
}
error_reporting(0);
include_once('db.php');
class login extends database{
  function getdata(){
    if (!$_POST['uname']=="" && !$_POST['password']=="") {
      $this->username=$_POST['uname'];
      $this->password=$_POST['password'];
      $sql="select * from login_details where uname='$this->username' and pass='$this->password'";
      $query=$this->dbconnection()->query($sql);
      if ($query->num_rows <1) {
        ?>
              <script>
                   alert('please enter valid username and password !!...');
  			         	 window.open('login.html','_self');
              </script>
        <?php
      }
    else {
      while($row=$query->fetch_assoc())
  			{

  			$_SESSION['uname']=$row['uname'];
  			$_SESSION['password']=$row['pass'];

  			}
        ?>
              <script>
                   alert('login successful !!...');
  			         	 window.location='data.html';
              </script>
        <?php
    }
    }
else {
  ?>
  <script>

       window.location='login.html';
  </script>
  <?php
}
  }
}
$obj=new login();
$obj->getdata();

 ?>
