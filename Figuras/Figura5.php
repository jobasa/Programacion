<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura5</title>
  </head>
  <body>
    <?php
       $k=5;
       for ($i=1; $i <= $k; $i++) {
         for ($j=1; $j <= ($k-$i); $j++) {
           echo "&nbsp&nbsp;";
         }
         for ($j=1; $j < $i; $j++) {
           echo "*";
         }
         echo "*";
         for ($j=1; $j < $i; $j++) {
           echo "*";
         }
         for ($j=1; $j <= ($k-$i); $j++) {
           echo "&nbsp&nbsp;";
         }
         echo "<br>";
       }
       ?>
  </body>
</html>
