<?php
/*
* PHP Color Mixer
* This script allows users to mix two colors and see the result.
* It uses GET method to retrieve color selections from a form.
* The result is displayed in a colored box.
* TODO: You can add more colors or refine the mixing logic
*/


$color1 = $_GET['color1'] ?? '';
$color2 = $_GET['color2'] ?? '';
$resultColor = "#ffffff";

if ($color1 && $color2) {
    if ($color1 === "Red" && $color2 === "Blue" || $color1 === "Blue" && $color2 === "Red") {
        $resultColor = "#800080"; // Purple
        $message = "Red + Blue = Purple";
    } elseif ($color1 === "Red" && $color2 === "Yellow" || $color1 === "Yellow" && $color2 === "Red") {
        $resultColor = "#ffa500"; // Orange
        $message = "Red + Yellow = Orange";
    } else {
        $message = "Mixing $color1 and $color2... try something else!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Color Mixer</title>
  <style>
  .result {
    width: 100px;
    height: 100px;
    margin: 20px auto;
  }
  </style>
</head>

<body>
  <h1>PHP Color Mixer</h1>
  <form method="GET">
    <select name="color1">
      <option value="">Pick Color 1</option>
      <option value="Red">Red</option>
      <option value="Blue">Blue</option>
      <option value="Yellow">Yellow</option>
    </select>
    <select name="color2">
      <option value="">Pick Color 2</option>
      <option value="Red">Red</option>
      <option value="Blue">Blue</option>
      <option value="Yellow">Yellow</option>
    </select>
    <input type="submit" value="Mix Colors">
  </form>
  <div class="result" style="background-color: <?php echo $resultColor; ?>;"></div>
  <p><?php echo $message ?? "Choose two colors!"; ?></p>
</body>

</html>