<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>





<?php

$id=$_SESSION['email'];
//echo $id;
$result ="SELECT * FROM aregistration where email='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['fname'];
$lname=$row3['lname'];
$email=$row3['email'];
$gender=$row3['gender'];
$dob=$row3['dob'];
$mbno=$row3['mbno'];
$address=$row3['address'];
$country=$row3['country'];
$state=$row3['state'];
$city=$row3['city'];
$img=$row3['img'];

$result2="SELECT * FROM country where con_id='$country'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$country1=$row4['con_name'];

	
	
}
$result5="SELECT * FROM state where state_id='$state'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$state1=$row5['state_name'];

	
	
}
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
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: #9ADA10;
  border: 1px solid #000000;
  border-radius: 10px;
 width:100px;
} 

.button:hover {background-color:#FF3333; color:white;}

.button:active {
  background-color: #9ADA10;
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  .shadow {-webkit-filter: drop-shadow(8px 8px 10px #47C18D);filter: drop-shadow(8px 8px 10px #FFC300  );}
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
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
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
                        <h1>User Details</h1>
                    </div>
                </div>
            </div>
        </div>
        <table width="480"  align="center" cellpadding="0" border="0">
<tr>
</tr>
  <tr>
  <td></td><td><img src="ted.gif" style="position:absolute;right:200px;" width="350px" height="200px" alt="no image found"/></td></tr>
    <td></td><td><img class="shadow" src="<?php echo $img ?>" style="border-radius: 50%;position:absolute;right:1000px;-webkit-filter: drop-shadow(8px 8px 10px #FF5733  );filter: drop-shadow(8px 8px 10px #FF5733  ); width="200px" height="200px" alt="no image found"/></td></tr>
    <tr><td width="100" valign="top"><div align="left"><b><h5 style="color:#7C2816;">FirstName:</b></h5></div></td>
    <td width="165" valign="top"><input type="text" readonly name="fname" style="border-color:white;color:#7C2816;font-weight:bold"  value='<?php echo $fname ?> '></td>
  </tr><br>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">LastName:</b></div></td>
    <td valign="top"><input type="text" readonly name="lname"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $lname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Email:</b></div></td>
    <td valign="top"><input type="email" readonly name="email"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $email ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Gender:</b></div></td>
    <td valign="top"><input type="text"readonly name="gender" style="border-color:white;color:#7C2816;font-weight:bold"value='<?php echo $gender ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Date Of Birth:</b> </div></td>
    <td valign="top"><input type="text"readonly name="dob"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $dob ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Mobile Number:</b> </div></td>
    <td valign="top"><input type="text" readonly name="mbno"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $mbno ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Address: </b></div></td>
    <td valign="top"><input type="text" readonly name="address"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $address ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">Country:</b> </div></td>
    <td valign="top"><input type="text"readonly name="country"style="border-color:white;color:#7C2816;font-weight:bold"value='<?php echo $country1 ?>'></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">State:</b> </div></td>
    <td valign="top"><input type="text"readonly name="state"style="border-color:white;color:#7C2816;font-weight:bold" value='<?php echo $state1 ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left"><b><h5 style="color:#7C2816;">City:</b> </div></td>
    <td valign="top"><input type="text" name="city" style="border-color:white;color:#7C2816;font-weight:bold"value='<?php echo $city ?> '></td>
  </tr>
  <tr></tr><tr></tr>
  
  <tr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;  <td></td><td></td>
  <td width="165" align="left">
  </table>
 <a href="edituser.php"><input style="border-radius: 50%;"type="button" name="revm"  style="right:50px;"value="Edit Profile" id="revm" class="button"></a></td></tr>


        
        <p align="right">&nbsp; </p>
</body>
        </html>