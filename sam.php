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

$mbno=$row3['mbno'];
$address=$row3['address'];
$country=$row3['country'];
$state=$row3['state'];
$city=$row3['city'];


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
.button1 {
  display: inline-block;
  padding: 5px 10px;
  font-size: 13px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: 5px;
  color: white;
  background-color: #0000cc;
  border: 1px solid #000000;
  border-radius: 20px;
 
}

.button1:hover {background-color: black;
color:white;}

.button1:active {
  background-color: #0000cc;
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
                .style5 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
	font-size: 40px;
	font-family: "Times New Roman", Times, serif;
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
                        <h1>Shipping Details</h1>
                    </div>
                </div>
            </div>
</div>
<center>
<div class="delivery">
        <p>&nbsp;</p>
        <p class="style1 style5">Delivered to,</p>
        <table width="435"  align="center" cellpadding="0" border="0">
		<form action="payment.php" method="post">
          <tr>
            <td></td>
          </tr>
          <tr>
            <td width="155" valign="top"><strong>FiratName:</strong></td>
            <td width="274" valign="top"><input name="fname" type="text" style="border-color:white;" value='<?php echo $fname ?> '></td>
          </tr>
          <br>
          <tr>
            <td valign="top"><strong>LastName:</strong></td>
            <td valign="top"><input name="lname" type="text"style="border-color:white;" value='<?php echo $lname ?> '></td>
          </tr>
         
         
          <tr>
            <td valign="top"><strong>Mobile Number: </strong></td>
            <td valign="top"><input name="mbno" type="text"style="border-color:white;" value='<?php echo $mbno ?> '></td>
          </tr>
          <tr>
            <td valign="top"><strong>Address: </strong></td>
            <td valign="top"><input name="address" type="text"style="border-color:white;" value='<?php echo $address ?> '></td>
          </tr>
          <tr>
            <td valign="top"><strong>Country: </strong></td>
            <td valign="top"><input name="country" type="text"style="border-color:white;" value='<?php echo $country1 ?> '></td>
          </tr>
          <tr>
            <td valign="top"><strong>State: </strong></td>
            <td valign="top"><input name="state" type="text"style="border-color:white;" value='<?php echo $state1 ?> '></td>
          </tr>
          <tr>
            <td valign="top"><div align="left"><strong>City: </strong></div></td>
            <td valign="top"><input name="city" type="text" style="border-color:white;"value='<?php echo $city ?> '></td>
          </tr>
		  <tr>
			<td valign="top"><div align="center">
			  <input type="submit" value="Continue"  class ="button1" name="Submit">
			    </div>
			</tr>
		  </form>
</table>
</div>
        

</body>
        </html>