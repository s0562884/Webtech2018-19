<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title></title>
    <?php
      function zufzahl($max,$anzahl,$stellen)
      { echo "<table class='table table-striped table-hover'>";
          echo "<thead>";
            echo "<tr>";
            echo "<th>Zufallszahl</th>";
            for($i=1;$i<=$stellen;$i++)
            {
              echo "<th>Erste $i Stellen</th>";
            }
            echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          for($i=1;$i<=$anzahl;$i++)
            { echo "<tr>";
              $zzahl=rand(1,$max);
              echo "<td>".$zzahl."</td>";
              $zaehler=1;
              while($zaehler<=$stellen)
              {
                $zahl=abschneiden($zzahl,$zaehler);
                echo "<td>".$zahl."</td>";
                $zaehler++;
              }
              echo "</tr>";
            }
          echo "</tbody>";
          echo "</table>";
      }
      function abschneiden($zahl,$stellen)
      {
        $base =pow(10,$stellen);
        return $zahl -($zahl % $base);
      }
    ?>
  </head>
  <body>
    <h1>Zufallszahlen</h1>
    <div>
      <?php zufzahl(20000,20,5); ?>
    </div>
  </body>
</html>
