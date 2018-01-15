<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura3</title>
  </head>
  <body>
    <ul>
      <?php
      for ($i=1; $i <= 7; $i++) {
        for ($j=1; $j <= $i; $j++) {
          echo "*";
        }
        echo "<br>";
      }

       ?>
    </ul>
  </body>
</html>
