<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>




<?php

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

if(isset($_POST['butn']))
{
	
	
header('location:auctionmoredetails.php');	
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
 
				div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	background-color:#CCCCCC;
	height:250px;
	border-radius:13px 13px 13px 13px;
}




/*div.img img {
    height:250x;
	width:180px;
}*/

div.desc {
    padding: 1px;
    text-align: center;
	font-family:Benguiat Bk BT;
        color: black;
}
.button1 {
  display: inline-block;
  padding: 5px 10px;
  font-size: 13px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #CCCCCC;
  border: 1px solid #000000;
  border-radius: 5px;
 
}

.button1:hover {background-color: black;
color:white;}

.button1:active {
  background-color: #FF0000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#txtbox{
	border-color:#CCCCCC;
	padding: 1px;
    text-align: center;
	font-family:Benguiat Bk BT;
        color: black;
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
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>
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
                        <h1>My Arts</h1>
                    </div>
                </div>
            </div>
        </div>
		<body>

 <?php
 

 $results=mysqli_query($con,"select * from auctionart where art_id=$c");

                  while($row=mysqli_fetch_array($results))
                  {
                    
					$date_end = $row['auction_date'];
					$time_original = strtotime($date_end);
$time_add      = $time_original + (3600*24); //add seconds of one day

$new_date      = date("Y-m-d", $time_add);

				  }
				  
				  
	$sql5="select * from auctionart where art_id='$c' and status=0 order by auctionart_id DESC limit 1";
	$result9=mysqli_query($con,$sql5);
	$row=mysqli_fetch_array($result9);
	$row_qty=count($row);
	$status = $row['status'];
				  ;
	if( $row_qty !=0){
					  
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


				  
					?>
					
					
						<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $new_date; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("clockdiv").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) 
	{
		getId(<?php echo $c ?>);

        clearInterval(x);
        document.getElementById("clockdiv").innerHTML = "AUCTION ENDED";
    }
}, 1000);
</script>	
			



<form action="#" method="post" name="moredetails">
	
<div class="d2"><img src="<?php echo $img ?>"width="250px" height="170px" style=" border-radius:30px;position:absolute;right:500px;top:280px;">
</div>
<p style="color:red;position:absolute;right:300px;top:280px;">Auction Ends in</p>
<div id="clockdiv" style="color:red;position:absolute;right:100px;top:280px;">

</div>
 
      <div class="category">
	  
     
<div class="d1">
<div style="position:absolute;left:350px;top:320px;">
	
       <table cellspacing="20" cellpadding="0" style="margin-top:-100px">
	
                    
                                <tr>
                                <td>Art Name</td><td><input type="text" name="artname" id="artname" style="border-color:white;" value='<?php echo $art_name ?> ' required readonly="readonly"/></td>
                                </tr>
								<tr></tr>
                            <tr>
                                <td>Art Category</td><br>
								<td><input type="text" name="artcategory" id="artcategory"  style="border-color:white;"value='<?php echo $category ?> ' required readonly="readonly"/></td>
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
                               <td>Price</td> <td><input type="text" name="price"style="border-color:white;" id="price" value='<?php echo $price ?> ' required readonly="readonly"/></td>
                            </tr><br>
                            <tr><td colspan="2" align="center">
                            <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $c ?>'>
                           <input type="submit" class="button" name="addcart" value="Add To Cart" id="addcart"/>
						   
						   <?php
								$check="SELECT * FROM aregistration WHERE email='$email'";
								$result4=mysqli_query($con,$check);
								$row101=mysqli_fetch_array($result4);
								$areg2 = $row101["areg"];
								
								$check2="SELECT * FROM bid WHERE areg='$areg2' and art_id= $c";
								$result4=mysqli_query($con,$check2);
								$row102=mysqli_fetch_array($result4);
								$co = count($row102);
							?>
						
						   <a href="auctionmoredetails.php?art_id=<?php echo $c; ?>"><input type="button" class="button" name="butn" value="submit your bid"<?php if ($row_qty == '0' OR $co >= 1){ ?> disabled <?php   } ?> id="butn" /></a></td></tr>
						   </form>
						   
						   <?php
}
}
	}
	else{
	
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
			  
?>
					

<form action="#" method="post" name="moredetails">
	
<div class="d2"><img src="<?php echo $img ?>"width="250px" height="170px" style=" border-radius:30px;position:absolute;right:500px;top:280px;">
</div>

</div>
 
      <div class="category">
	  
     
<div class="d1">
<div style="position:absolute;left:350px;top:320px;">
	
       <table cellspacing="20" cellpadding="0" style="margin-top:-100px">
	
                    
                                <tr>
                                <td>Art Name</td><td><input type="text" name="artname" id="artname" style="border-color:white;" value='<?php echo $art_name ?> ' required readonly="readonly"/></td>
                                </tr>
								<tr></tr>
                            <tr>
                                <td>Art Category</td><br>
								<td><input type="text" name="artcategory" id="artcategory"  style="border-color:white;"value='<?php echo $category ?> ' required readonly="readonly"/></td>
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
                               <td>Price</td> <td><input type="text" name="price"style="border-color:white;" id="price" value='<?php echo $price ?> ' required readonly="readonly"/></td>
                            </tr><br>
                            <tr><td colspan="2" align="center">
                            <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $c ?>'>
                           <input type="submit" class="button" name="addcart" value="Add To Cart" id="addcart"/>
						   </form>
						   
						   <?php
}
}
	}
	
?>
		
</div>
</div>
</table>
</div>
</div>
</div>
</body>
<script src="js/jquery.js"></script>

<script>
function getId(val){
  $.ajax({
    type: "POST",
    url: "UpdateData.php",
    data: "art_id="+val,
	success: function(data){
		alert("Auction Ended..!");
}
    
});
}
</script>
</html>