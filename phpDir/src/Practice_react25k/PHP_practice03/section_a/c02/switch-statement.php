<?php
/* Write your code here */
$dayOfWeek = "Monday";
$discountMessage = "";
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  /* Write your code here */
  switch($dayOfWeek) {
    case "Monday":
        $discountMessage = "Get 20% off chocolates!";
        break;
    case "Tuesday":
        $discountMessage = "Get 20% off mints!";
        break;
    default:
        $discountMessage = "Buy three packs, get one free.";
}
  ?>
  <p>Offer: <?php echo $discountMessage; ?></p>
</body>

</html>