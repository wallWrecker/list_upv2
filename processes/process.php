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

	function verifyInput($data) {
		if (is_string($data) == false) {
			// convert any none string value to a string datatype;
			$x = strval($data);
			return $x;
		}
	}
	
	function postData($data) {
		
	}

	function setUpStream() {
		
	}

	if (isset($_GET["your_data"])) {
		$data_container = array();
		$data = array("name" => "Christian", "age" => 22, "gender" => "Male", "nationality" => "Filipino");
		foreach($data as $key) {
			echo $key;
		}
	}
?>