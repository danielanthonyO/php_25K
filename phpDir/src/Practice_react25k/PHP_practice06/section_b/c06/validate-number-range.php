<?php
/* Write PHP Code here

Step 1: Initialize two variables with empty strings

Step 2: Write custom fuction to check 
if any given value between 0 to 100 is a number

Step 3: Check if the form has been submitted. If it has,
  collect age from the $_POST superglobal array.
  The data comes from a text input, so a value will always be sent for it
  when the form is submitted.

Step 4: Call the custom function to check if the value user submitted falls between
range 16 and 65. You may store boolean value as return type in function to check if the number is valid. 

Step 5: Check if condition is valid, if it is you can display
    "Age is valid" else "You must be 16-65 years old"
*/

?>
<?php include 'includes/header.php'; ?>

<p>
<?php 
$age = '';
$valid = '';


// Step 1: Set up empty variables
$age = "";
$message = "";

// Step 2: Custom function to check age
function checkAge($age) {
    if (is_numeric($age) && $age >= 16 && $age <= 65) {
        return true;
    } else {
        return false;
    }
}


?>

<!-- Step 5: HTML Form -->
<form method="post">
    <label>Enter Age:</label><br>
    <input type="text" name="age" value="<?php echo $age; ?>" required><br><br>
    <input type="submit" value="Check Age">
</form>

<!-- Show Message -->
<p><strong><?php echo $message; ?></strong></p>
</p>

<?php include 'includes/footer.php'; ?>