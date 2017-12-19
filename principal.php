<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script src="dist/dropzone.js" type="test/javascript"/>
    <link rel="stylesheet" type="text/css" href="dist/dropzone.css">
    <title>Drag and Drop  </title>
  </head>
  <body>
    <form action="subir.php" class="dropzone" id="dropzone">
      <div class="fallback">
        <input type="file" name="file" multiple id="archivos">
      </div>
    </form>

    <script type="test/javascript">
      var = dropzone = new Dropzone("#archivos",{url:'subir.php'});
    </script>

  </body>
</html>

<?php

?>
