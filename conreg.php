<?php
echo "hiii";
include_once 'dbcon.php';
if (isset($_POST['signup'])) {
$categoryname = $_POST['categoryname'];
    
          
        $sql1="INSERT INTO `country`(`con_name`,`status`) VALUES ('$categoryname',1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));

echo "hiii";
}
?>