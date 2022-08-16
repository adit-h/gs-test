<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSeat Tech Test</title>

	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5"></div>
		<h1>The story: Geekseat Witch Saga: Return of The Coder!</h1>
		<div class="row mt-3"></div>
		<form name="form1" id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row g-2">
				<div class="col-md">
					<div class="mb-3 form-floating">
					    <input type="text" class="form-control" name="input1" value="10 12" placeholder="Place the person array here">
					    <!-- <textarea class="form-control" placeholder="Place the persons array here" id="input" name="input" style="height: 100px;">
					    	<?php //echo (isset($default)) ? $default : '';?>
					    </textarea> -->
					    <label for="input1" class="form-label">Input person A</label>
					</div>
					<div class="mb-3 form-floating">
					    <input type="text" class="form-control" name="input2" value="13 17" placeholder="Place the person array here">
					    <label for="input2" class="form-label">Input person B</label>
					</div>
				</div>
				<div class="col-md">
					<div class="mb-3 form-floating">
					    <!-- <input type="text" class="form-control" id="output" placeholder="Output of average value"> -->
					    <textarea class="form-control" placeholder="Output aray of average values" id="output" name="output" style="height: 130px;">
					    	<?php echo (isset($result)) ? htmlspecialchars($result) : '';?>
					    </textarea>
					    <label for="output" class="form-label">Output with value</label>
					</div>
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Slash</button>
		</form>
	</div>

</body>
</html>

<?php
	include('class/Hero.php');
	include('class/Person.php');

	// create instance
	$hero = new Hero();

	// cast reader
	//$default = $hero->readMagic();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if (isset($_POST['submit'])) {
		$input1 = trim($_POST["input1"]);
		$input2 = trim($_POST["input2"]);

		if (empty($input1) || empty($input2)) {
		  	$result = "Sorry no input to Process.";
		} else {

			$personA = new Person();
			$personB = new Person();

			$data1 = explode(' ', $input1);
			$data2 = explode(' ', $input2);
			
			foreach ($input as $key => $val) {
				$raw = explode(' ', $val);

				// set value
				$personA->setAOD($raw[0]);
				$personA->setYOD($raw[1]);
				$personB->setAOD($raw[2]);
				$personB->setYOD($raw[3]);

				$result = $hero->slash($personA, $personB);
				echo $result."<br>";
			}

		  	$result = "Process results";
		}
	}
?>
