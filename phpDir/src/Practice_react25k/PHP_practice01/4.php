<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers
	Step 2: Make a function that passes parameters and call it using parameter values
 */


 // FunctioN
 function addNumbers() {
	 $num1 = 10;
	 $num2 = 5;
	 return $num1 + $num2; // Returns the sum
 }
 
 // Calling the function and displaying the result
 echo "The sum is: " . addNumbers() . "<br>";
 
 // Step 2: Function that accepts parameters
 function multiplyNumbers($a, $b) {
	 return $a * $b; // Returns the product
 }
 
 // Calling the function with parameter values
 $result = multiplyNumbers(6, 7);
 echo "The product is: " . $result;
 ?>
 






</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>