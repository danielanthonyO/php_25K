<?php
/* Write your code here */
$candyPrice = 1.99;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    for ($i = 1; $i <= 10; $i++) {
      $totalCost = number_format($candyPrice * $i, 2);
      echo "Pack $i: $$totalCost";
      echo '<br>';
  }
    ?>
  </p>
</body>

</html>