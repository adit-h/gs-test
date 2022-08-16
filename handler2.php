<?php
    if (isset($_POST["uploadfile"]) ) {
		if (!empty($_FILES["inputfile"])) {
			$target_dir = "uploads/";
            $target_input = "input.txt";
            $target_file = $target_dir . $target_input;
			$uploadOk = 1;
			$fType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			if ($_FILES["inputfile"]["size"] > 500000) {
                // Check file size
				$err = "File size to large";
				$class2 = "alert-danger";
				$uploadOk = 0;
			} else if ($fType != "txt") {
			    // Check file type
				$err = "Only txt file are allowed";
				$class2 = "alert-danger";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$msg2 = "Sorry, your file was not uploaded. ".$err;
				$class2 = "alert-danger";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["inputfile"]["tmp_name"], $target_file)) {

					$outputfile = "";
					$data = [];
					// Read file and process
					$myfile = fopen("./uploads/input.txt", "r");
					if (!feof($myfile)) {
						$fline = fgets($myfile);
						$outputfile .= $fline;
						while(!feof($myfile)) {
							$temp = fgets($myfile);
							$data[] = $temp;
							$outputfile .= $temp;
						}

						$personA = new Person();
						$personB = new Person();

						// set value
						$outputresult = "";
						foreach($data as $key => $val) {
							$raw = explode(' ', $val);

							$personA->setAOD($raw[0]);
							$personA->setYOD($raw[1]);
							$personB->setAOD($raw[2]);
							$personB->setYOD($raw[3]);

							$outputresult .= $hero->slash($personA, $personB)."\n";
						}
					}
					fclose($myfile);

					$msg2 = "The file <strong>". htmlspecialchars( basename( $_FILES["inputfile"]["name"])). "</strong> has been uploaded. ";
                    $msg2 .= "Results calculated.";
					$class2 = "alert-success";
				} else {
					$msg2 = "Sorry, there was an error uploading your file.";
					$class2 = "alert-danger";
				}
			}
		} else {
			$msg2 = "File upload empty";
			$class2 = "alert-danger";
		}
	}
?>