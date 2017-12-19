<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
  </head>
  <body>
    <?php $hola="MiPueblo" ?>
<h1>Mi PUEBLO</h1>
    <ul>
  <li><a class="<?php if ($hola=="reto") echo "active" ?>" href="reto2.php">Reto</a></li>
  <li><a class="<?php if ($hola=="YO") echo "active" ?>" href="YO.php">YO</a></li>
  <li><a class="<?php if ($hola=="MiPueblo") echo "active" ?>" href="MiPueblo.php">MI PUEBLO</a></li>
  <li><a class="<?php if ($hola=="Instagram") echo "active" ?>" href="Instagram.php">Instagram</a></li>
  <li><a class="<?php if ($hola=="Facebook") echo "active" ?>" href="Facebook.php">Facebook</a></li>
</ul>
  </body>
</html>
