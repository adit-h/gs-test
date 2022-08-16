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
		<?php include('handler2.php');?>

		<div class="container">
			<div class="row mt-3"></div>
			<h1>The story: Geekseat Witch Saga: Return of The Coder!</h1>
			<div class="row mt-3"></div>

			<h4>Single Input</h4>
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
							<input type="tel" class="form-control" name="input1" value="<?php echo (!empty($input1)) ? htmlspecialchars($input1) : $default1 ?>" placeholder="Place the person array here">
							<label for="input1" class="form-label">Input person A</label>
						</div>
						<div class="mb-3 form-floating">
							<input type="tel" class="form-control" name="input2" value="<?php echo (!empty($input2)) ? htmlspecialchars($input2) : $default2 ?>" placeholder="Place the person array here">
							<label for="input2" class="form-label">Input person B</label>
						</div>
					</div>
					<div class="col-md">
						<div class="mb-3 form-floating">
							<input type="tel" readonly class="form-control" id="output" value="<?php echo (isset($result)) ? htmlspecialchars($result) : '';?>" placeholder="Output of average value">
							<label for="output" class="form-label">Output with value</label>
						</div>
						<div class="d-grid gap-2">
							<button type="submit" name="submit" class="btn btn-primary btn-lg">Hit Me</button>
						</div>
					</div>
				</div>

			</form>

			<hr/>
			<h4>File Input</h4>
			<?php if (isset($msg2)) { ?>
			<div class="alert <?php echo $class2; ?> alert-dismissible fade show" role="alert">
				<?php echo $msg2 ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php } ?>
			<form name="form2" id="form2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
				<div class="row g-2">
					<div class="col-md">
						<div class="mb-3">
							<input type="file" class="form-control" name="inputfile" placeholder="Upload input file here">
							<span>Download input <a href="download.php">file</a> template</span>
						</div>
					</div>
					<div class="col-md">
						<div class="d-grid gap-2">
							<button type="submit" name="uploadfile" class="btn btn-secondary">Upload</button>
						</div>
					</div>
				</div>
				<div class="row g-2">
					<div class="col-md">
						<div class="mb-3 form-floating">
							<textarea class="form-control" style="height: 100px;">
								<?php echo (isset($outputfile)) ? htmlspecialchars($outputfile) : '';?>
							</textarea>
							<label for="outpufile" class="form-label">Input from file</label>
						</div>
					</div>
					<div class="col-md">
						<div class="mb-3 form-floating">
							<textarea class="form-control" style="height: 100px;">
								<?php echo (isset($outputresult)) ? htmlspecialchars($outputresult) : '';?>
							</textarea>
							<label for="outputresult" class="form-label">Results</label>
						</div>
					</div>
				</div>

			</form>
		</div>

	</body>
</html>
