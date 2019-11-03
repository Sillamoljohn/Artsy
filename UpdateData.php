<?php 

include_once "dbcon.php";

if (!empty($_POST["art_id"])) {
  $c = $_POST["art_id"];
$query = "update auctionart set status=3 where art_id=$c";
		echo $query;
     $results = mysqli_query($con, $query);
}

	 ?>