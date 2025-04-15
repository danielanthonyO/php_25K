<?php
// Write PHP code here
$greetings = ["Hi", "Howdy", "Hello", "Hola", "Ciao", "Moi", "Namaste", "Welcome"];
$randomGreeting = $greetings[array_rand($greetings)];

$bestSellers = ["notebook", "pencil", "ink", "notebook", "pencil", "notebook"];
$itemCounts = array_count_values($bestSellers);


arsort($itemCounts); 
$topItem = array_key_first($itemCounts); 


$customer = [
    "firstname" => "John",
    "lastname" => "Doe",
    "email" => "john.doe@example.com"
];

if (!empty($customer["firstname"])) {
    $personalizedGreeting = "$randomGreeting, " . $customer["firstname"] . "!";
} else {
    $personalizedGreeting = $randomGreeting . "!";
}
?>

<?php include 'includes/header.php'; ?>
<h1>Best Sellers</h1>
<!-- display -->
<p><? echo "<h3>$personalizedGreeting</h3>";
echo "<p>Our best-selling item is: <strong>$topItem</strong></p>";
echo "<p>Total items sold: " . count($bestSellers) . "</p>";

// Display customer details
echo "<h4>Customer Details:</h4>";
echo "<p>Name: " . $customer["firstname"] . " " . $customer["lastname"] . "</p>";
echo "<p>Email: " . $customer["email"] . "</p>";
?></p>
<?php include 'includes/footer.php'; ?>