<?php 
// We need to add neccessary link css files and script files.

function sourceLink($style = "js", $filename = "index") {
  $current_file = $_SERVER["PHP_SELF"];
  $file_type = ["js","css"];
  $pathToFiles = ["js" => "src/js/", "css" => "src/css/"];

  foreach($file_type as $value) {
    if($value == $style) {
      $isTrue = "true";
      break;
    } else {
      $isTrue = "false";
    }
  }

  if($isTrue) {
    // Check if the current directory contains pages folder.
    if(strpos($current_file, "pages")) {
      switch ($style) {
        case 'js':
          $path = $pathToFiles[$style];
          return "../$path$filename.$style";
          break;

        case 'css':
          $path = $pathToFiles[$style];
          return "../$path$filename.$style";

        default:
          throw new Exception("Invalid source arguments", 1);
          break;
      }
    } else {
      $path = $pathToFiles[$style];
      return "$path$filename.$style";
    }
  } else {
    return;
  }
}




