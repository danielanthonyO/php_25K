<?php
/* Write your code here */
$name = "Daniel";
?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>

<p>Welcome <?php
/* Write your code here */
if (!empty($name)) {
  echo "$name!";
} else {
  echo "back!";
}
?>
</p>

</body>

</html> 
