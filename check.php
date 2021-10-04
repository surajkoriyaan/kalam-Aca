<?php
session_start();
if (isset($_SESSION['uname'])) {
  ?>
  <script type="text/javascript">
    window.location="data.html";
  </script>
  <?php
}


 ?>
