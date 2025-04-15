<?php

/* 
  Write you php code here

   */
  $candy_name = "Chocolate";
  $price= 5;
  $candy_name = "Sweet Bliss"; 
  $price = 6.5; 

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
    <!-- // Updating the variables -->
    <p></p>
  <p>Updated Candy Name: <?php echo "$candy_name <br>"; ?> </p>
  <p>New price name is <?php echo "$price €"; ?> </p>

</body>

</html>