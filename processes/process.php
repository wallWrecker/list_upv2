<?php 
  function validateLoginInputs($id, $password) {
		// echoing for now.
		if (!empty($id) && !empty($password)) {
			echo "Your username/phone is $id <br> Password is " . md5($password);
		} else {
      echo "<p class=\"has-text-danger has-text-centered\">Please enter atleast 4 characters</p>";
			return;
		}
	}

	function verifyFormInputs($name, $type, $amount, $ispaid, $status ) {
		// Checks if all this inputs are have all the values.
		foreach(func_get_args() as $key => $value) {
			if(empty($value)) {
				echo "Your Done!";
			}
		}

			// Gonna pass this to a json format for the front end.
			// Array Template (Associative)
			$data = array("name" => "", "type" => "", "amount" => "", "ispaid" => "", "status" => "");
			//Set counter to zero, for the func_get_arg() method
			$counter = 0;
			foreach($data as $key => $value) {
				$data[$key] = func_get_arg($counter);
				$counter++;
			}
			header("Content-Type: application/json");
			return json_encode($data);
	}

	// Example of Inputs.
	$name = "Christian"; $type = "G50X"; $amount = 50;
	$ispaid = "paid"; $status = "Paid on OCT-22-2020";

	if (isset($_GET["execute"])) {
		echo verifyFormInputs($name, $type, $amount, $ispaid, $status); 
	}
?>