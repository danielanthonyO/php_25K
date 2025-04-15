<?php

$petName = "Fluffy";
$petType = "cat";
$petAge = 3;

echo "My pet's name is $petName, it is a $petType, and it is $petAge years old.";
echo "<br>";







// class Pet definition *******************************
class Pet {
    public $name;
    public $type;
    public $age;

    // constructor to set up pet
    function __construct($name, $type, $age) {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }

    // method
    public function sayHello() {
        echo "Hi, I'm $this->name, and I'm $this->age years old\n";
    }
};

$pet1 = new Pet("Fluffy", "cat", 3);
$pet1->sayHello();

$pet2 = new Pet("Rover", "dog", 5);
$pet2->sayHello();


// class Pet definition ******************





?>