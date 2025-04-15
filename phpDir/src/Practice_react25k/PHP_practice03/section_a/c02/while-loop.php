<?php
/* Write your code here */
$price_per_pack = 1.99; // Price of one pack
$pack_count = 1; // Start from 1
$total_packs = 5; // Number of packs
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    while ($pack_count <= $total_packs) {
      $total_price = $price_per_pack * $pack_count;
      echo "Price for $pack_count pack(s): $" . number_format($total_price, 2) . "<br>";
      $pack_count++; // Increment the counter
  }
    ?>
  </p>
</body>

</html>