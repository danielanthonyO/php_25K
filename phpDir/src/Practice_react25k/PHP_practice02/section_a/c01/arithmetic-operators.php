<?php

/* 
  Write you php code here

   */
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?php 
      $candy_items = 3;
      $cost_per_pack = 5;
      $sub_total = $candy_items * $cost_per_pack;
      echo "The sub total is: " . $sub_total . "€";
    ?></p>
  <p><?php
      $tax = ($sub_total / 100)*20;
      $total_amount = $sub_total + $tax;
      echo "The total amount is: " . $total_amount . "€";
    ?></p>

</body>
</html>