<?php

/**
 * Write your code here
 */
$candy = [
  'Toffee' => ['price' => 3, 'stock'=> 12],
  'Mints' => ['price' => 2, 'stock'=> 26],
  'Fudge' => ['price' => 4, 'stock'=> 12],
];

$tax = 20;

function get_recorder_message(int $stock): string {
  return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
  return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax=0 ): float {
  return $price * $quantity;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>

    <?php
    /**
     * Write your code here
     */

    ?>

  </table>
</body>

</html>