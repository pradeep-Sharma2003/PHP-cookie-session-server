<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
  <?php
  if(isset($_SESSION["favcolor"]))
  {
  echo "favourate color : " . $_SESSION["favcolor"];
  }
  ?>
</body>
</html>