<?php
declare(strict_types=1);

// Conversion Functions
function celsiusToFahrenheit(float $c): float {
    return ($c * 9/5) + 32;
}
function celsiusToKelvin(float $c): float {
    return $c + 273.15;
}
function kmhToMs(float $speed): float {
    return $speed * 1000 / 3600;
}
function kmhToKnots(float $speed): float {
    return $speed * 0.539957;
}
function kgToGrams(float $kg): float {
    return $kg * 1000;
}
function gramsToKg(float $g): float {
    return $g / 1000;
}

// Result variables
$fahrenheit = $kelvin = $ms = $knots = $grams = $kg = "";

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['celsius'])) {
        $celsius = (float)$_POST['celsius'];
        $fahrenheit = celsiusToFahrenheit($celsius);
        $kelvin = celsiusToKelvin($celsius);
    }

    if (isset($_POST['kmh'])) {
        $kmh = (float)$_POST['kmh'];
        $ms = kmhToMs($kmh);
        $knots = kmhToKnots($kmh);
    }

    if (isset($_POST['mass'])) {
        $mass = (float)$_POST['mass'];
        $massUnit = $_POST['massUnit'];

        if ($massUnit === 'kg') {
            $grams = kgToGrams($mass);
        } elseif ($massUnit === 'g') {
            $kg = gramsToKg($mass);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Measurement Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .section {
            margin-bottom: 30px;
        }

        h2 {
            color: #2980b9;
        }

        input[type="number"], select {
            padding: 10px;
            width: 60%;
            font-size: 1rem;
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            background: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
        }

        button:hover {
            background: #1c5980;
        }

        .results {
            margin-top: 10px;
            color: #555;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Measurement Converter</h1>
    <form method="post">
        <!-- Temperature -->
        <div class="section">
            <h2>A. Temperature (°C)</h2>
            <input type="number" step="any" name="celsius" placeholder="Enter Celsius">
            <div class="results">
                <?php if ($fahrenheit !== ""): ?>
                    <p>Fahrenheit: <?= round($fahrenheit, 2) ?> °F</p>
                    <p>Kelvin: <?= round($kelvin, 2) ?> K</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Speed -->
        <div class="section">
            <h2>B. Speed (km/h)</h2>
            <input type="number" step="any" name="kmh" placeholder="Enter km/h">
            <div class="results">
                <?php if ($ms !== ""): ?>
                    <p>Meters/second: <?= round($ms, 2) ?> m/s</p>
                    <p>Knots: <?= round($knots, 2) ?> knots</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mass -->
        <div class="section">
            <h2>C. Mass</h2>
            <input type="number" step="any" name="mass" placeholder="Enter mass">
            <select name="massUnit">
                <option value="kg">Kilograms ➝ Grams</option>
                <option value="g">Grams ➝ Kilograms</option>
            </select>
            <div class="results">
                <?php if ($grams !== ""): ?>
                    <p>Grams: <?= round($grams, 2) ?> g</p>
                <?php endif; ?>
                <?php if ($kg !== ""): ?>
                    <p>Kilograms: <?= round($kg, 2) ?> kg</p>
                <?php endif; ?>
            </div>
        </div>

        <button type="submit">Convert</button>
    </form>
</div>
</body>
</html>
