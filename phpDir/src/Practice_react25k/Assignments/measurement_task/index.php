<!DOCTYPE html>
<html>
<head>
    <title>Unit Converter</title>
    <style>
        * { box-sizing: border-box; }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #2a2a2a;
        }

        .wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px 30px;
        }

        h2 {
            text-align: center;
            margin: 0 0 20px;
            color: #333;
        }

        form {
            flex-grow: 1;
            overflow-y: auto;
        }

        .converter {
            margin: 30px 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        .input-group {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-top: 5px;
        }

        .input-group input,
        .input-group select {
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            flex: 1;
            min-width: 0;
        }

        .input-group input {
            max-width: 60%;
        }

        .input-group select {
            max-width: 40%;
        }

        input[type="submit"] {
            background-color:rgb(30, 31, 33);
            color: #fff;
            cursor: pointer;
            border: none;
            transition: background 0.3s ease;
            padding: 10px;
            width: 95%;
            border-radius: 6px;
            margin: 20px 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .results {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 0.95em;
            color: #444;
        }

        h4 {
            margin: 10px 0 5px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="container">
        <h2>Unit Converter</h2>
        <form method="POST">
            <!-- A. Temperature -->
            <div class="converter">
                <h3>A. Temperature</h3>
                <label>Enter Temperature:</label>
                <div class="input-group">
                    <input type="number" name="temp_value" step="any">
                    <select name="temp_unit">
                        <option value="celsius">Celsius</option>
                        <option value="fahrenheit">Fahrenheit</option>
                    </select>
                </div>
            </div>

            <!-- B. Speed -->
            <div class="converter">
                <h3>B. Speed</h3>
                <label>Enter Speed:</label>
                <div class="input-group">
                    <input type="number" name="speed_value" step="any">
                    <select name="speed_unit">
                        <option value="kmh">km/h</option>
                        <option value="mps">m/s</option>
                    </select>
                </div>
            </div>

            <!-- C. Mass -->
            <div class="converter">
                <h3>C. Mass</h3>
                <label>Enter Mass:</label>
                <div class="input-group">
                    <input type="number" name="mass_value" step="any">
                    <select name="mass_unit">
                        <option value="kg">Kilograms</option>
                        <option value="g">Grams</option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Convert">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="results">
                <?php
                // A. Temperature
                if (!empty($_POST["temp_value"])) {
                    $value = floatval($_POST["temp_value"]);
                    $unit = $_POST["temp_unit"];
                    echo "<h4>Temperature:</h4>";
                    if ($unit == "celsius") {
                        $f = ($value * 9/5) + 32;
                        echo "$value °C = $f °F<br>";
                    } else {
                        $c = ($value - 32) * 5/9;
                        echo "$value °F = " . round($c, 2) . " °C<br>";
                    }
                }

                // B. Speed
                if (!empty($_POST["speed_value"])) {
                    $speed = floatval($_POST["speed_value"]);
                    $unit = $_POST["speed_unit"];
                    echo "<h4>Speed:</h4>";
                    if ($unit == "kmh") {
                        echo "$speed km/h = " . round($speed * 1000 / 3600, 2) . " m/s<br>";
                    } else {
                        echo "$speed m/s = " . round($speed * 3.6, 2) . " km/h<br>";
                    }
                }

                // C. Mass
                if (!empty($_POST["mass_value"])) {
                    $mass = floatval($_POST["mass_value"]);
                    $unit = $_POST["mass_unit"];
                    echo "<h4>Mass:</h4>";
                    if ($unit == "kg") {
                        echo "$mass kg = " . ($mass * 1000) . " g<br>";
                    } else {
                        echo "$mass g = " . ($mass / 1000) . " kg<br>";
                    }
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
