<?php

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>
    <?
    $Item= 'Choco';
    $wanted = 5;
    $stock = 6;
    $can_buy = ($wanted <= $stock);

    if ($wanted <= $stock){
      echo "1";
    } else{
      echo "0";
    }
    ?>
  </p>


</body>

</html>