<?php
/* Write your code here */
$candy_status = 1;
$order = 5;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>Candy is
  <?php
  /* Write your code here */
  if ($candy_status >= $order) {
    echo "In Stock";
} else {
  echo "Sold Out";
}

  ?>
  </p>
</body>

</html>