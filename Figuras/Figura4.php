<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura4</title>
  </head>
  <body>
  <?php
for ($i=0; $i <=2 ; $i++) {
  echo "*";
  for ($j=1; $j <=($i*2) ; $j++) {
    echo "*";
  }
echo "<br>";
}
for ($i=2; $i >1 ; $i--) {
  echo "*";
for ($j=2; $j >=1 ; $j--) {
  echo "*";
}
echo "<br>";
}
echo "*" . "<br>";

   ?>
  </body>
</html>
