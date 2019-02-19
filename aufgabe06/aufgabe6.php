<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datei einlesen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<h1>Datei einlesen</h1>
<?php
  ini_set("auto_detect_line_endings", true);
  $file = @fopen ( "./mockdatatext", "r" );
  if (! $file)
  {
      echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
  }
  else
  {
    $counter = 1;
    while (!feof($file))
      { echo "<div class='card col-xl-4 col-lg-6 col-md-12' style='background-color:grey'><ul class='list-group' style=padding:10px>";
        while($counter<=10)
        {
          $vorname = fgets($file);
          $nachname = fgets($file);
          $email =fgets($file);
          $ip = fgets($file);
          $leerzeile = fgets($file);
          echo "<li class='list-group-item'>$vorname$nachname( <a href='mailto:$email'>$email</a>)</li>";
          $counter++;
         }
         echo "</div></ul><br />";
         $counter=1;
       }
       fclose ( $file );
  }
  ?>
</body>
</html>
