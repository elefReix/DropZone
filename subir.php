<?php
  $archivo = $_FILES['file'];
  $templocation = $archivo["tmp_name"];
  $name = $archivo["name"];

  move_uploaded_file($templocation,"cargas/$name")
?>
