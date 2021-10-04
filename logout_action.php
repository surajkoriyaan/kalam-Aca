<?php
session_start();
if (!isset($_SESSION['uname'])) {
  ?>
  <script type="text/javascript">
    window.location="login.html";
  </script>
  <?php
}else {
  session_unset();
  session_destroy();
  ?>
  <script type="text/javascript">
    window.location="login.html";
  </script>
  <?php
}


 ?>
