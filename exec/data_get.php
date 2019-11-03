<?php

include_once '../db.php';
$action = $_POST['context'];
if ($action == 'category') {
get_category();
}



function get_category() {
    
$index = $_POST['index'];
$q = mysqli_query($con, "SELECT artcat_id,category FROM artcategory where artcat_id='" . $index . "' and status=1");
//var_dump($q);
$str = "";
while ($row = mysqli_fetch_array($q)) {
$str .= $row['artcat_id'] . ":" . $row['category'] . ",";
}
echo rtrim($str, ",");
die();
}

