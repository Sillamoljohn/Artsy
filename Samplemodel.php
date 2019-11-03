<?php
include 'dbcon.php';
$email=$_SESSION['email'];
$c=$_POST["hiddenartid"];
//echo $c;

if(isset($_POST['addcart']))
{
	
	$logid= "SELECT * FROM art WHERE art_id='$c'";
	$result2=mysqli_query($con,$logid);
	while($row=mysqli_fetch_array($result2))
	{
		$p=$row["ureg"];
	}
	$result="SELECT * FROM aregistration WHERE email='$email'";
	$result4=mysqli_query($con,$result);
	while($row=mysqli_fetch_array($result4))
	{
		$q=$row["areg"];
		
	}
		

	$sql1="INSERT INTO mycart(`art_id`, `ureg`,`areg`) VALUES ('$c','$p','$q')";
	$result1=mysqli_query($con,$sql1)or die(mysqli_error($con));;


	$sql="update art set status=1 where art_id='$c'";
	$result3=mysqli_query($con,$sql);
	echo"<script>alert('product added to cart')</script>";
header('location:mycart.php');
}

	
$res="SELECT * FROM aregistration WHERE email='$email'";
	$result11=mysqli_query($con,$res);
	while($row=mysqli_fetch_array($result11))
	{
		$areg=$row["areg"];
		
	}


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>More Details</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:whhite;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.select{
	width:160px;
	height:20px;
	background-color:#333;
	 display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-radius:13px;
}


div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	background-color:black;
	height:270px;
	border-radius:13px 13px 13px 13px;
}
div.img:hover span:after {
  position: relative;
  opacity: 0;
  top: 0;
  left:980px;
  transition: 0.5s;
}



div.img:hover span{
    border: 1px solid #777;
	padding-right: 0px;
}

div.img:hover span:after{
  opacity: 1;
  right: 0;
}

div.img img {
    height:180px;
	width:180px;
}

div.desc {
    padding: 15px;
    text-align: center;
	font-family:Benguiat Bk BT;
}
.button1 {	width:100px;
	background-color:#33FF99;
	border-radius:13px;
	cursor: pointer;
}
.d2 { 
display:inline-block;
position:absolute;
width:30%;
}



.d1
{

width:525px;
height: 425px;
margin-top:60px;
margin-left:40%;
display:inline-block;
text-align:center;
}


z-index:20px;
}

</style>
</head>

<body>
 <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                   <img src="assets/img/logo.png" style="background-position:left top";>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li class="active">
							<a href="edituser.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_camera"></span><br>BUY ART</a>
						</li>
						<li>
							<a href="artists"><span aria-hidden="true" class="icon_comment"></span><br>ARTISTS</a>
						</li>
						<li>
							<a href="contact.html"><span aria-hidden="true" class="icon_tools"></span><br>CONTACT</a>
						</li>
						<li >
							<a href="index.php"><span aria-hidden="true" class="icon_profile"></span><br>LOGOUT</a>
						</li>
						<li >
							<a href="changepass.php"><span aria-hidden="true" class="icon_profile"></span><br> CHANGE PASSWORD</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_profile"></span>
                        <h1>Art Details</h1>
                    </div>
                </div>
            </div>
        </div>



<br>



<br />


 <?php
 $sql2="SELECT * FROM art where art_id='$c'";
$res2=mysqli_query($con,$sql2);
while($row3 = mysqli_fetch_array($res2))
{ 
$art_name=$row3['artname'];
$price=$row3['price'];
$artdetails=$row3['artdetails'];
$img=$row3['artimg'];
$size=$row3['size'];
$cat_id=$row3['artcat_id'];
$u_reg=$row3['ureg'];

$result2="SELECT * FROM artcategory where artcat_id='$cat_id'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$category=$row4['category'];	
}

$result5="SELECT * FROM uregistration where ureg='$u_reg'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$fname=$row5['fnam'];
    $lname=$row5['lnam'];	
}

?>


<form action="#" method="post" name="moredetails">
	
<div class="d2"style="border:0">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $img ?> width="300px" height="300px" style="position:absolute;right:500px;border:3px solid #006600; border-radius:30px;">
</div>
 
      <div class="category">
     
<div class="d1">
	
       <table style="left:10px;">
                     
                                <tr>
                                <td>Art Name</td><td><input type="text" name="artname" id="artname" value='<?php echo $art_name ?> ' required readonly="readonly"/></td>
                                 </tr>
                            <tr>
                                <td>Art Category</td><td><input type="text" name="artcategory" id="artcategory" value='<?php echo $category ?> ' required readonly="readonly"/></td>
                            </tr>
                            <tr>
                               <td>Artist Name</td> <td><input type="text" name="artistname" id= "artistname" value='<?php echo $fname." ".$lname ?> ' required readonly="readonly"/></td>
                            </tr>
                            <tr>
                               <td>Art Details</td> <td><input type="text" name="artdetails" id="artdetails" value='<?php echo $artdetails ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                               <td>Size</td> <td><input type="text" name="size" id="size" value='<?php echo $size ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                               <td>Price</td> <td><input type="text" name="price" id="price" value='<?php echo $price ?> ' required readonly="readonly"/></td>
                            </tr>
                            <tr><td colspan="2" align="center">
                            <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $c ?>'>
                           <input type="submit" class="button" name="addcart" value="Add To Cart" id="addcart"/></td></tr>
						   </form>
						   <?php
}
?>
		

		
</div>
</div>
</table>
</body>
</html>
