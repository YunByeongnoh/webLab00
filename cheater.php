<!DOCTYPE html>
<html>
	<head>
		<title>Grade Store</title>
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/pResources/gradestore.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<?php
		$name = $_POST["name"];
		$check = $_POST["cs"];
		$ID = $_POST["id"];
		$grade = $_POST["grade"];
		$credit = $_POST["card"];
		$card = $_POST["cc"];
		# Ex 4 : 
		# Check the existance of each parameter using the PHP function 'isset'.
		# Check the blankness of an element in $_POST by comparing it to the empty string.
		# (can also use the element itself as a Boolean test!)
		 if (isset($name,$check,$ID,$credit) == false){
		//echo isset($name,$check,$ID,$grade,$credit).".////";
		?>

		<!-- Ex 4 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't fill out the form completely. Try again?</p>
		--> 
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. Try again?</p>

		<?php
		
		# Ex 5 : 
		# Check if the name is composed of alphabets, dash(-), ora single white space.
		
		} elseif (preg_match("/^[a-zA-Z]+(-[a-zA-Z]+){0,}[ ]?[a-zA-Z]+([-]{1}[a-zA-Z]+){0,}$/i", $name)== false) { 
			//* 써도된다 중간에 스페이스나 대시 하나만나온다 /
			//^[a-zA-Z]+[\- ]?[a-zA-Z]+$
		?>

		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid name. Try again?</p>
		--> 
			<h1>Sorry</h1>
			<p>You didn't provide a valid name. Try again?</p>
		<?php
		
		# Ex 5 : 
		# Check if the credit card number is composed of exactly 16 digits.
		# Check if the Visa card starts with 4 and MasterCard starts with 5. 
		
		} elseif (strlen($_POST['card']) != 16 || ($_POST['cc'] == "visa" && $_POST['card'][0] != 4) || ($_POST['cc'] == "mastercard" && $_POST['card'][0] != 5)) {
		?>

		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid credit card number. Try again?</p>
		--> 
		<h1>Sorry</h1>
		<p>You didn't provide a valid credit card number. Try again?</p>
		<?php
		
		# if all the validation and check are passed 
		} else {
		?>

		<h1>Thanks, looser!</h1>
		<p>Your information has been recorded.</p>
		
		<!-- Ex 2: display submitted data -->
		<?php
			//var_dump($check);
			$test = processCheckbox($check);
			
		?>
		<ul> 
			<li>Name: <?= $name?></li>
			<li>ID: <?=$ID?></li>
			<!-- use the 'processCheckbox' function to display selected courses -->
		
			<li>Course: <?=$test?></li>
			<li>Grade: <?=$grade?></li>
			<li>Credit <?=$credit?>(<?=$_POST["cc"]?>)</li>
		</ul>
		
		<!-- Ex 3 : 
			<p>Here are all the loosers who have submitted here:</p> -->
		<p>Here are all the loosers who have submitted here:</p> 
		<?php
			$filename = "loosers.txt";
			/* Ex 3: 
			 * Save the submitted data to the file 'loosers.txt' in the format of : "name;id;cardnumber;cardtype".
			 * For example, "Scott Lee;20110115238;4300523877775238;visa"
			 */
			//fwrite($fh, $_POST["name"].";".$_POST["id"].";".$_POST["card"].";".$_POST["cc"]."\r\n");
			file_put_contents($filename, $_POST["name"].";".$_POST["id"].";".$_POST["card"].";".$_POST["cc"]."\r\n" , FILE_APPEND);


		?>

		
		<!-- Ex 3: Show the complete contents of "loosers.txt".
			 Place the file contents into an HTML <pre> element to preserve whitespace -->

		
		<?php
			$loosers = nl2br(file_get_contents($filename)); 

		 }
		?>
		<br>
			<?=$loosers?>
		
		
	</body>
</html>
<?php
			/* Ex 2: 
			 * Assume that the argument to this function is array of names for the checkboxes ("cse326", "cse107", "cse603", "cin870")
			 * 
			 * The function checks whether the checkbox is selected or not and 
			 * collects all the selected checkboxes into a single string with comma seperation.
			 * For example, "cse326, cse603, cin870"
			 */
			
		
		function processCheckbox($names){
				return implode(",", $names);
			 }
		?>
