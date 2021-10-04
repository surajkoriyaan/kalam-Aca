<?php
include_once('db.php');
error_reporting(0);
class register extends database{
   function getdata(){
   if (!$_POST['uname']=="" && !$_POST['password']=="" && !$_POST['address']=="") {
     $this->uname=$_POST['uname'];
     $this->password=$_POST['password'];
     $this->address=$_POST['address'];
     $check="select * from login_details where uname='$this->uname'";
     $eval=$this->dbconnection()->query($check);
     if ($eval->num_rows >= 1) {
       ?>
       <script>
            alert('this username already exist !!...');
            window.location='registration.html';
       </script>

       <?php
     }
     else{
     $sql="insert into login_details(uname,pass) values('$this->uname','$this->password')";
      $query=$this->dbconnection()->query($sql);
      if ($query==true) {
        $sql2="insert into user_address(uname,address) values('$this->uname','$this->address')";
        if ($this->dbconnection()->query($sql2)) {
          ?>
          <script>
               alert('sign up successful !!...');
               window.location='registration.html';
          </script>

          <?php
        }else {
          ?>
          <script>
               alert('something went wrong 1 !!...');
               window.location='registration.html';
          </script>

          <?php
        }
      }

    else {
       ?>
       <script>
            alert('something went wrong 2 !!...');
            window.location='registration.html';
       </script>

       <?php
     }
   }
 }
 else {
   ?>
   <script>
        alert('all fields are required !!...');
        window.location='registration.html';
   </script>

   <?php
 }
 } // function
}  // class

$obj=new register();
$obj->getdata();
?>
