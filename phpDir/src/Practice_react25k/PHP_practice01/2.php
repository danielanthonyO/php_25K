<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20: 

		Step 2: Add the two variables and display the sum with echo:


		Step3: Make 2 Arrays with the same values, one regular and the other associative
		 */

		// Step 1: 
		$number1 = 10;
		$number2 = 20;

		$total = $number1 + $number2;
		echo "$total <br>";
		echo "The sum of $number1 and $number2 is: $total <br>";
		
		// index array
		$index_array = [$number1, $number2, $total];
		echo "<br>Index Array: ";
		print_r($index_array);


		// Associative array
		$associativeArray = array(
			"first" => 10,
			"second" => 20,
			"third" => 30,
		);

		// Display the arrays
		echo "<br>Associative Array: ";
		print_r($associativeArray);







		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>