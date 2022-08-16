<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSeat Tech Test</title>

	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('handler.php');?>

	<div class="container">
		<div class="row mt-5"></div>
		<h1>The story: Geekseat Witch Saga: Return of The Coder!</h1>
		<div class="row mt-3"></div>

		<?php if (isset($msg)) { ?>
		<div class="alert <?php echo $class; ?> alert-dismissible fade show" role="alert">
		 	<?php echo $msg ?>
		 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } ?>
		<form name="form1" id="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row g-2">
				<div class="col-md">
					<div class="mb-3 form-floating">
					    <input type="text" class="form-control" name="input1" value="<?php echo (!empty($input1)) ? htmlspecialchars($input1) : $default1 ?>" placeholder="Place the person array here">
					    <label for="input1" class="form-label">Input person A</label>
					</div>
					<div class="mb-3 form-floating">
					    <input type="text" class="form-control" name="input2" value="<?php echo (!empty($input2)) ? htmlspecialchars($input2) : $default2 ?>" placeholder="Place the person array here">
					    <label for="input2" class="form-label">Input person B</label>
					</div>
				</div>
				<div class="col-md">
					<div class="mb-3 form-floating">
					    <input type="text" class="form-control" id="output" value="<?php echo (isset($result)) ? htmlspecialchars($result) : '';?>" placeholder="Output of average value">
					    <label for="output" class="form-label">Output with value</label>
					</div>
					<div class="d-grid gap-2">
  						<button type="submit" name="submit" class="btn btn-primary btn-lg">Hit Me</button>
					</div>
				</div>
			</div>

		</form>
	</div>

</body>
</html>
