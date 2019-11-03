<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>




<?php

$email=$_SESSION['email'];
/* @$b=$_POST["HiddenArtidForAuction"];
$_SESSION['art']=$b;
$c=$_SESSION['art']; */
//echo $c;
@$cid=$_REQUEST['art_id'];
//$hid=$_REQUEST['hallid'];
$_SESSION['art_id']=$cid;
$c=$_SESSION['art_id'];

if(isset($_POST['AuctionSubmit']))
{
	$cc=$_POST['hiddenart_id'];
	$logid= "SELECT * FROM art WHERE art_id='$cc'";
	$result2=mysqli_query($con,$logid);
	$row=mysqli_fetch_array($result2);
	
		$p=$row["ureg"];
	echo $p;
	
	$result="SELECT * FROM aregistration WHERE email='$email'";
	$result4=mysqli_query($con,$result);
	while($row=mysqli_fetch_array($result4))
	{
		$q=$row["areg"];
		
	}
	$a_price=$_POST['auctionprice'];
	$a_date=$_POST['auctiondate'];
	
$result8="SELECT * FROM auctionart WHERE art_id='$cc' and auction_date='$a_date'";
//echo $result8;
	$result11=mysqli_query($con,$result8);
	$row11=mysqli_fetch_array($result11);
	$co = count($row11);
	//echo $co;
	if( $co == 0 )
	{
		$sql1="INSERT INTO `auctionart`( `ureg`, `art_id`, `auction_price`, `auction_date`) VALUES ('$p','$cc','$a_price','$a_date')";
	$result1=mysqli_query($con,$sql1)or die(mysqli_error($con));
	
	echo "<script>if(confirm('You have Succesfully register the art for bid!!!')){document.location.href='artistprofile.php'}else{document.location.href='artistprofile.php'};</script>";
}	  
	else
	{
      echo "<script>if(confirm('This Art is Already set for auction in this date!!!')){document.location.href='artistproductview.php'}else{document.location.href='artistproductview.php'};</script>";
}	  
	


	//$sql="update art set status=1 where art_id='$c'";
	//$result3=mysqli_query($con,$sql);
	//echo"<script>alert('product added to cart')</script>";
//header('location:mycart.php');
}

	
$res="SELECT * FROM aregistration WHERE email='$email'";
	$result11=mysqli_query($con,$res);
	while($row=mysqli_fetch_array($result11))
	{
		$areg=$row["areg"];
		
	}


?>



<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: #CCCCCC;
  border: 1px solid #000000;
  border-radius: 10px;
 
}

.button:hover {background-color:#FF3333; color:white;}

.button:active {
  background-color: #FF3333;
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
    </head>
	<script>
	
				function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    } 
</script>	

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
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_camera"></span><br>BUY ART</a>
						</li>
						<li>
							<a href="artistlist.php"><span aria-hidden="true" class="icon_comment"></span><br>ARTISTS</a>
						</li>
						
						<li >
							<a href="logout.php"><span aria-hidden="true" class="icon_profile"></span><br>LOGOUT</a>
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
                        <h1>Auction Settings</h1>
                    </div>
                </div>
            </div>
        </div>
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
	
<div class="d2"><img src="<?php echo $img ?>" width="300px" height="200px" style=" border-radius:30px;margin-top:100px;margin-right:500px">
</div>
 
      <div class="category">
	  
     
<div class="d1">
	
     <table cellspacing="20" cellpadding="0" style="margin-left:700px;margin-top:-250px;">
                    
                                <tr>
                                <td>Art Name</td><td><input type="text" name="artname" id="artname" readonly style="border-color:white;" value='<?php echo $art_name ?> ' required /></td>
                                </tr>
								<tr></tr>
                            <tr>
                                <td>Art Category</td><br>
								<td><input type="text" name="artcategory" id="artcategory" readonly style="border-color:white;"value='<?php echo $category ?>' required /></td>
                            </tr>
                            <tr>
                               <td>Artist Name</td> <td><input type="text" name="artistname" id= "artistname" style="border-color:white;" value='<?php echo $fname." ".$lname ?> ' required readonly="readonly"/></td>
                            </tr>
                            <tr>
                               <td>Art Details</td> <td><input type="text" name="artdetails"  style="border-color:white;"id="artdetails" value='<?php echo $artdetails ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                               <td>Size</td> <td><input type="text" name="size" id="size" style="border-color:white;" value='<?php echo $size ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                               <td>Price</td> <td><input type="number"  min="1000" placeholder="Enter art price..." name="auctionprice" style="border-color:white;" onkeypress="javascript:return isNumber(event)" required></td>

                            </tr>
							<tr>
                               <td>Date</td> <td><input type="date" id="datefield" name="auctiondate"  min= "1995-02-12" style="border-color:white;" required></td>
                           <script>
							var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("min", today);</script>
						   </tr><br>
                            <tr><td colspan="2" align="center">
                            <input type="hidden"  id="txtbox"  name="hiddenart_id" value='<?php echo $c ?>'>
                           <input type="submit" class="button" name="AuctionSubmit" value="Submit" id="addcart"/></td></tr>
						   </form>
						   <?php
}
?>
		