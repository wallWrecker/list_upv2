<?php 
	class Validate {
		protected $current_session_token = "";
    function __construct($current_session_token) {
      $this->current_session_token = $current_session_token;
    }

    // function doValidate($collection) {
    // 	$finalCollection = [];
    //   foreach ($collection as $data) {
    //   	$data = $this->cleanData($data);
    //   	array_push($finalCollection, $data);
    //   }
    //   return $finalCollection;
    // }

    function cleanData($data, $type = "loosely") {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);

			switch ($type) {
				case "strict":
					return md5($data);
				break;
				
				default:
					return $data;
				break;
			}
    }
  }
  class Tokens {
    #For database interaction unlock this four var's.
    // var $host;
    // var $username;
    // var $password;
    // var $table_name;
    private $arrayOfLetters = ["a","b","c","d",
        "e","f","g","h","i","j","k","l","m","n",
        "o","p","q","r","s","t","u","v","w","x",
        "y","z",0,1,2,3,4,5,6,7,8,9];
    
    function generateToken($sizeOfToken) {
      $storage = array();
      for ($i = 0; $i <= $sizeOfToken; $i++) {
        $current_random = rand(0, count($this->arrayOfLetters) -1 );
        array_push($storage, $this->arrayOfLetters[$current_random]);
      }
      return $storage;
    }

    function verifyToken($token) {
      $theIndex;
      foreach($this->arrayOfLetters as $key => $value) {
        if($token == $value) {
          array_push($theIndex, $value);
        }
      }
      return $theIndex;
    }
  }

  #predefine identifier $submit_button , and $temporary_token.
  $username = "";
  $password = "";

  //Define Token class.
  $token = new Tokens();
  if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $temporary_token = $token->generateToken(6);
      $verify = new Validate($temporary_token);
      $username = $verify->cleanData($_POST["username"]);
      $password = $verify->cleanData($_POST["password"],"strict");
    }
  }

  $myQuery = "";
  if(isset($_REQUEST["query"])) {
    echo "You entered " . $_REQUEST["query"];
  }
?>

