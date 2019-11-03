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
    <td></td><td><img src="<?php echo $img ?>" style="border-radius: 50%;position:absolute;right:900px;" width="150px" height="150px" alt="no image found"/></td></tr>
    <tr><td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><input type="text" name="fname" style="border-color:white;" value='<?php echo $fname ?> '></td>
  </tr><br>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><input type="text" name="lname"style="border-color:white;" value='<?php echo $lname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><input type="email" name="email"style="border-color:white;" value='<?php echo $email ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><input type="text" name="gender" style="border-color:white;"value='<?php echo $gender ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Date Of Birth: </div></td>
    <td valign="top"><input type="text" name="dob"style="border-color:white;" value='<?php echo $dob ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Mobile Number: </div></td>
    <td valign="top"><input type="text" name="mbno"style="border-color:white;" value='<?php echo $mbno ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address: </div></td>
    <td valign="top"><input type="text" name="address"style="border-color:white;" value='<?php echo $address ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Country: </div></td>
    <td valign="top"><input type="text" name="country"style="border-color:white;" value='<?php echo $country1 ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">State: </div></td>
    <td valign="top"><input type="text" name="state"style="border-color:white;" value='<?php echo $state1 ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">City: </div></td>
    <td valign="top"><input type="text" name="city" style="border-color:white;"value='<?php echo $city ?> '></td>
  </tr>
  <tr></tr><tr></tr>
  <tr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;  <td></td><td></td>
  <td width="165" align="left">
 <a href="edituser.php"> <input type="button" name="revm"  value="Edit Profile" id="revm" class="button1"></a></td></tr>

 
</table>
        
        <p align="right">&nbsp; </p>
</body>
        </html>