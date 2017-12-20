<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script src="dist/dropzone.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="dist/dropzone.css"/>
    <style>
      #dropzone{
        padding:14px;
        border-style: dashed;
        font-size: 26pt;
        width: 50%;
        background-color: #EEE;
      }
    </style>
    <title>Drag and Drop  </title>
  </head>
  <body>
    <form action="upload.php" class="dropzone" id="dropzone">
      <div class="fallback">
        <input type="file" name="file" multiple id="archivos">
      </div>
    </form>

   

  </body>
</html>
