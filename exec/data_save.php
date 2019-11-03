<?php

include_once '../db.php';
$action = $_POST['context'];
if ($action == 'save_product') {
save_product();
}

function save_product()
{
    //echo 'fsdfsfs';
    
    if(isset($_POST['submit']))
{
    $subcatid=$_POST['artcat_id'];
    $subcatname=$_POST['product_name'];
    $desc=$_POST['description'];
    $img=$_POST['image'];
   
    
    $sql="insert into `product`(`product_id`, `artcat_id`, `product_name`, `description`, `image`, `status`) VALUES ('NULL','$subcatid','$subcatname','$desc','$img',1)";
    echo $sql;
   
$sql->execute();
}
}




