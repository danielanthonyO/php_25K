<?php
/*
Write your code here
*/
$candy_in_stock = true;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <P>
  <?php
  /* Write your code here */
  if ($candy_in_stock) {
    echo "In Stock";
} else {
    echo "Sold Out";
}
  ?>
  </P>
</body>

</html>