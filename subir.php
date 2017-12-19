<?php
  $archivos = $_FILES['file'];
  $tempLocation = $archivo["temp_name"];
  $name = $archivo["name"];

  if (!tempLocation) {
    # code...
    die ("No se ha seleccionado ningun archivo");
  }
  if (move_uploaded_file($tempLocation,"files/$name")) {
    # code...
    echo "EL archivo se guardo correctamente";
  }else{
    echo "Ocurrio un error al subir el archivo"
  }

?>
