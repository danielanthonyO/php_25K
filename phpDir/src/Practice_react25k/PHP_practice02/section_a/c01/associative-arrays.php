<?php

/* 
  Write you php code here

   */
  $nutrition = array(
    "Fat" => "50%",
    "Sugar" => "30%",
    "Salt" => "20%"
);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  
  <h3><?php echo "<h2>Nutrition (per 100g)</h2>";?>
    <p>Fat: <?php echo $nutrition['Fat'];?></p>
    <p>Sugar: <?php echo $nutrition['Sugar'];?> </p>
    <p>Salt: <?php echo $nutrition['Salt']; ?> </p>

    <p>
      <?php
          // $total = $nutrition['Fat'] + $nutrition['Sugar'] +$nutrition['Salt']";
          // echo $total;
      ?>
    </p>

  </h3>
</body>

</html>