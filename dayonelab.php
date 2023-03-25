<?php
// Php dashboard demo
 //phpinfo();

 define("SITENAME","PHP");

 echo SITENAME ."<br>";

 //Super global variables 
// print_r( $_SERVER );

// echo "<div style=\"float:right;\">" 
echo "<span style=\"color:red;'\">  Server Name </span>" .$_SERVER["PHPRC"]."<br>";
echo "<span style=\"color:red;'\">  Server address</span>" .$_SERVER["SERVER_ADDR"]."<br>";
echo "<span style=\"color:red;'\">  file name </span>" .$_SERVER["SCRIPT_NAME"]."<br>";
echo "<span style=\"color:red;'\">  Server port </span>" .$_SERVER["REMOTE_PORT"]."<br>";
echo "<span style=\"color:red;'\">  path of file </span>" .$_SERVER["SCRIPT_FILENAME"]."<br><br><br>";

$brotherAge = "10";

switch ($brotherAge) {
  case ($brotherAge < 5):
    echo " Stay at HOME !";
    break;
  case ($brotherAge == 5):
    echo "Go to Kindergarden !";
    break;
  case  ($brotherAge >= 6 && $brotherAge <= 12):
    echo "Go to grade : four ! ";
    break;
   default:
      echo "you didn't specify your age";

}

?>
