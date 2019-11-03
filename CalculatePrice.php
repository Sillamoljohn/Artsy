<?php
include_once "dbcon.php";

if (!empty($_POST["size"])) {
  $size = $_POST["size"];

  $length = substr($size, 0, 3);
  $breadth = substr($size, 4, 8);
	$amount = round(sqrt(($length*$breadth))*5);
	echo $amount;
}
?>
