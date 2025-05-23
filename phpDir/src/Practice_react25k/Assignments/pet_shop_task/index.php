<?php
session_start();

// Base Pet class
abstract class Pet {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function speak();
    abstract public function action();

    public function getInfo() {
        return "{$this->name} (Age: {$this->age})";
    }
}

// Pet types
class Dog extends Pet {
    public function speak() { return "Woof! I'm {$this->name}."; }
    public function action() { return "I chase my tail."; }
}

class Cat extends Pet {
    public function speak() { return "Meow! I'm {$this->name}."; }
    public function action() { return "I nap on the windowsill."; }
}

class Bird extends Pet {
    public function speak() { return "Tweet! I'm {$this->name}."; }
    public function action() { return "I sing a sweet melody."; }
}

// PetShop handler
class PetShop {
    public function __construct() {
        if (!isset($_SESSION['pets'])) {
            $_SESSION['pets'] = [];
        }
    }

    public function addPet($type, $name, $age) {
        switch ($type) {
            case 'Dog': $pet = new Dog($name, $age); break;
            case 'Cat': $pet = new Cat($name, $age); break;
            case 'Bird': $pet = new Bird($name, $age); break;
            default: return;
        }
        $_SESSION['pets'][] = $pet;
    }

    public function removePet($index) {
        if (isset($_SESSION['pets'][$index])) {
            unset($_SESSION['pets'][$index]);
            $_SESSION['pets'] = array_values($_SESSION['pets']); // Reindex the array after removal
        }
    }

    public function getPets() {
        return $_SESSION['pets'];
    }
}

// Handle input
$shop = new PetShop();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $type = $_POST['type'] ?? '';
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? '';
        if ($type && $name && $age !== '') {
            $shop->addPet($type, $name, $age);
        }
    } elseif (isset($_POST['remove'])) {
        $petIndex = $_POST['petIndex'] ?? null;
        if ($petIndex !== null) {
            $shop->removePet($petIndex);
        }
    }
}

$pets = $shop->getPets();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pet Shop</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 90%;
        }
        form {
            margin-bottom: 30px;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        button[name="add"] {
            background-color: #4CAF50;
        }
        button[name="add"]:hover {
            background-color: #45a049;
        }
        button[name="remove"] {
            background-color: #f44336;
        }
        button[name="remove"]:hover {
            background-color: #e53935;
        }
        .pet-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 6px;
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pet Shop</h1>
        <form method="POST">
            <label for="type">Pet Type:</label>
            <select name="type" id="type" required>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" min="0" required>

            <div class="button-group">
                <button type="submit" name="add">Add Pet</button>
            </div>
        </form>

        <?php if (count($pets) > 0): ?>
            <form method="POST">
                <label for="petIndex">Select Pet to Remove:</label>
                <select name="petIndex" id="petIndex" required>
                    <option value="">--Select Pet--</option>
                    <?php foreach ($pets as $index => $pet): ?>
                        <option value="<?= $index ?>"><?= htmlspecialchars($pet->getInfo()) ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="button-group">
                    <button type="submit" name="remove">Remove Selected Pet</button>
                </div>
            </form>

            <?php foreach ($pets as $pet): ?>
                <div class="pet-card">
                    <strong><?= htmlspecialchars($pet->getInfo()) ?></strong><br>
                    <?= htmlspecialchars($pet->speak()) ?><br>
                    <em><?= htmlspecialchars($pet->action()) ?></em>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align: center;">No pets added yet!</p>
        <?php endif; ?>
    </div>
</body>
</html>
