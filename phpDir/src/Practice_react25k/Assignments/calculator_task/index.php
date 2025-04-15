<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple PHP Calculator</title>

  <style>
  body {
      font-family: Arial, sans-serif;
      background-color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;    
} 
.calculator {
      color: #000;
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      border: 4px solid #d68c01;
      box-shadow: 0 8px 20px rgba(244, 3, 3, 0.1);
      text-align: center;
      width: 300px;
    }

    select {
      margin: 10px;
      padding: 10px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solidrgb(197, 207, 212);
    } 
    input, button {
      margin: 10px;
      padding: 10px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 40%;
    }

    button {
      color: #000;
      color: #fff;
      background-color: #d68c01;
      background-color: #333;
      padding: 0.6rem 1.2rem;
      width: 60%;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    } 

    button:hover {
      background-color: #0056b3;
      background-color:#d1a149;
    }

    h3 {
      margin-top: 20px;
      color: #333;
    }
    .error {
      color: red;
    }
  </style>

</head>
<body>

  <div class="calculator">
    <h2>Simple PHP Calculator</h2>
    <form method="post">
      <label for="first_number">Enter First Number:</label>
      <input type="number" name="first_number" id="first_number" placeholder="First number" required><br>
      
      <label for="operation">Select Operator:</label>
      <select name="operation">
        <option value="addition">+</option>
        <option value="subtract">−</option>
        <option value="multiply">×</option>
        <option value="division">÷</option>
      </select><br>

      <label for="second_number">Enter Second Number:</label>
      <input type="number" name="second_number" id="second_number" placeholder="Second number" required><br>
    
      <button type="submit">Calculate</button>
    </form>
    
    <p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_num = floatval($_POST["first_number"]);
        $second_num = floatval($_POST["second_number"]);
        $operation = $_POST["operation"];
        $result = "";
        $symbol = "";
        $error = "";

        switch ($operation) {
            case "addition":
                $result = $first_num + $second_num;
                $symbol = "+";
                break;
            case "subtract":
                $result = $first_num - $second_num;
                $symbol = "-";
                break;
            case "multiply":
                $result = $first_num * $second_num;
                $symbol = "×";
                break;
            case "division":
                if ($second_num == 0) {
                    $error = "Cannot divide by zero.";
                } else {
                    $result = $first_num / $second_num;
                    $symbol = "÷";
                }
                break;
            default:
                $error = "Invalid operation.";
        }

        if ($error) {
            echo "<h3 class='error'>$error</h3>";
        } else {
            echo "<h3>Correct answer: $first_num $symbol $second_num = <strong>$result</strong></h3>";
        }
    }
    ?>
  </p>
  </div>

</body>
</html>
