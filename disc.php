<?php

//session_start();
$con=mysqli_connect("localhost","root","","artsy");


$draw_id = $_POST['hiddendrawid'];
$image=$_POST['uploadfile'];
$dst=$_POST['price'];
//$pdid=4;
//$dsct=10;

$sqle= "upadte drawart set image='$image' and price='$dst' where draw_id='$draw_id'";
echo $sqle;
$res = mysqli_query($con,$sqle);
?>