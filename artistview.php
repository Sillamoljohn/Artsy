<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>






<?php

$id=$_SESSION['email'];
//echo $id;
$result ="SELECT * FROM uregistration where email='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['fnam'];
$lname=$row3['lnam'];
$email=$row3['email'];
$gender=$row3['gender'];
$dob=$row3['dob'];
$mbno=$row3['mbno'];
$address=$row3['address'];
$edu=$row3['edu'];
$country=$row3['country'];
$state=$row3['state'];
$city=$row3['city'];
$img=$row3['img'];
}
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
						
							<a href="drawrequest.php"><span aria-hidden="true" class="icon_house"></span><br>Draw Arts</a>
						</li>
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>LOGOUT</a>
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
                        <h1>Artist Profile</h1>
                    </div>
                </div>
            </div>
        </div>
        <table width="480"  align="center" cellpadding="0">

<tr>
</tr>
  <tr>
    <td></td><td><img src="<?php echo $img ?>" style="border-radius: 50%;position:absolute;right:1000px;-webkit-filter: drop-shadow(8px 8px 10px #8E44AD  );filter: drop-shadow(8px 8px 10px #8E44AD  );width="150px" height="150px" alt="no image found"/></td></tr>
    <tr><td width="82" valign="top"><h5 style="color:#8E44AD;"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><input type="text" readonly name="fname" id="fname"style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $fname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">LastName:</div></td>
    <td valign="top"><input type="text" name="lname" readonly id="lname" style="border-color:white;color:#8E44AD;font-weight:bold"value='<?php echo $lname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Email:</div></td>
    <td valign="top"><input type="email" name="email" readonly style="border-color:white;color:#8E44AD;font-weight:bold"value='<?php echo $email ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Gender:</div></td>
    <td valign="top"><input type="text" name="gender" readonly style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $gender ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Date Of Birth: </div></td>
    <td valign="top"><input type="text" readonly name="dob"style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $dob ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Mobile Number: </div></td>
    <td valign="top"><input type="text"readonly name="mbno"style="border-color:white;color:#8E44AD;font-weight:bold"  value='<?php echo $mbno ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Address: </div></td>
    <td valign="top"><input type="text" readonly name="address"  style="border-color:white;color:#8E44AD;font-weight:bold"value='<?php echo $address ?> '></td>
  </tr>
   <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Education: </div></td>
    <td valign="top"><input type="text" readonly name="edu" style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $edu ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">Country: </div></td>
    <td valign="top"><input type="text" readonly name="country" id="country" style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $country1 ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">State: </div></td>
    <td valign="top"><input type="text"readonly name="state"  style="border-color:white;color:#8E44AD;font-weight:bold"value='<?php echo $state1 ?> '></td>
  </tr>
  <tr>
    <td valign="top"><h5 style="color:#8E44AD;"><div align="left">City: </div></td>
    <td valign="top"><input type="text"  readonly name="city" style="border-color:white;color:#8E44AD;font-weight:bold" value='<?php echo $city ?> '></td>
  </tr>
  
  </td></tr>
  <tr></tr><tr></tr>
  <tr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;  <td></td><td></td>
  <td width="165" align="left">
  </table>
  <a href="editartist.php"><input type="button"style="border-radius: 50%;" name="revm"  value="Edit Profile" id="revm" class="button"></a></td></tr>

</table>
        
        
        </body>
        </html>