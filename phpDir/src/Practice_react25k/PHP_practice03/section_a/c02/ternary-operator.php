<?php
/*Write your code here*/
$candy_in_stock = false;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>
  <?
  /* Write your code here */
  echo $candy_in_stock ? "In Stock" : "Sold Out";
  ?>
  </p>

</body>

</html>