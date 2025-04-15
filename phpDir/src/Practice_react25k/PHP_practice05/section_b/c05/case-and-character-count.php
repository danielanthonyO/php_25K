<?php
$text = 'Home sweet home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p><?php
echo "<br>";
// to lowercase
$lowercaseText = strtolower($text);
echo "Lowercase: " . $lowercaseText . "<br>";

// to uppercase
$uppercaseText = strtoupper($text);
echo "Uppercase: " . $uppercaseText . "<br>";

// to count 
$charCount = strlen($text);
echo "Number of characters: " . $charCount . "<br>";

// Count number of words
$wordCount = str_word_count($text);
echo "Number of words: " . $wordCount;
?></p>
<?php include 'includes/footer.php'; ?>