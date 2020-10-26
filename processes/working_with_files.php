<h3>Working with Files in php</h3>

<?php 
  $my_file = fopen("../web_dictionary.txt", "r")  or die("Unable to open file");
  while(!feof($my_file)) {
    echo fgets($my_file) . "<br>"; 
  }
  
  #closes the file.  
  fclose($my_file);
?>