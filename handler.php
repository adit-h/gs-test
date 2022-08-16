<?php
	include('class/Hero.php');
	include('class/Person.php');

	// create instance
	$hero = new Hero();

	// set default
	$default1 = "10 12";
	$default2 = "13 17";

	if (isset($_POST["submit"])) {
		$input1 = trim($_POST["input1"]);
		$input2 = trim($_POST["input2"]);

		if (empty($input1) || empty($input2)) {
		  	$msg = "Oops.. Seems you have invalid input.";
		  	$class = "alert-danger";
		} else {

			$personA = new Person();
			$personB = new Person();

			$data1 = explode(' ', $input1);
			$data2 = explode(' ', $input2);

			if (count($data1) < 2 || count($data2) < 2) {
				$msg = "Oops.. Seems you have invalid input.";
				$class = "alert-danger";
			} else {
				// set value
				$personA->setAOD($data1[0]);
				$personA->setYOD($data1[1]);
				$personB->setAOD($data2[0]);
				$personB->setYOD($data2[1]);

				$result = $hero->slash($personA, $personB);
				
			  	$msg = "Process results";
			  	$class = "alert-success";
			}
		}
	}
?>