<?php
session_start();
if (!isset($_SESSION['uname'])) {
  ?>
  <script type="text/javascript">
    window.location="login.html";
  </script>
  <?php
}else {
  include_once('db.php');
  class address extends database{
    function getdata(){
    $uname=$_SESSION['uname'];
    $sql="select * from user_address where uname='$uname'";
    $run=$this->dbconnection()->query($sql);
    if ($run == true) {
      while ($row=$run->fetch_assoc()) {
        ?>
         User Name :- <?php  echo $_SESSION['uname']?>
        <br>
        Your Address :- <?php echo $row['address']?>
        <?php
      }
    }
    }

  }
  $obj=new address();
  $obj->getdata();
}

?>
