<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>




<?php

$email=$_SESSION['email'];
	//echo $email;
$res="SELECT * FROM aregistration WHERE email='$email'";
	$result11=mysqli_query($con,$res);
	while($row=mysqli_fetch_array($result11))
	{
		$areg=$row["areg"];
		
	}

if(isset($_POST['cancel']))
{
	$c=$_POST["hidden_artid"];
	//echo $c;	
	
 $sql="update art set status=0 where art_id='$c'";
	$res3=mysqli_query($con,$sql);
	$sql2="update mycart set status=2 where art_id='$c'";
	$res4=mysqli_query($con,$sql2);
	echo"<script>alert('Remove from Cart..!!')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Carts</title>

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
						<li
						class="active">
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_camera"></span><br>Buy Art</a>
						</li>
						<li>
							<a href="artistlist.php"><span aria-hidden="true" class="icon_comment"></span><br>Artists</a>
						</li>
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_profile"></span><br>Logout</a>
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
                        <span aria-hidden="true" class="icon_tools"></span>
                        <h1>MY CART</h1>
                      
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Full Width Text -->
    <!-- Services -->
    <!-- Services Half Width Text -->
<div class="services-half-width-container">
        	<div class="container">
	            <div class="row"></div>
          </div>
        </div>
<body>
<?php
$result9 ="SELECT * FROM mycart where areg='$areg' and status=0 and status1=0";
$result8=mysqli_query($con,$result9);
$row9 = mysqli_fetch_array($result8);
if(count($row9)==0){
?>
<div>
<img src="nothing_to_show.png">
</div>
<?php
}
else{
	?>
<table width="1200" height="248" align="center"   cellpadding="0" >

<tr>
 <th><p>Item</p>
   </th>
 
 <th><p>Artname</p>
   </th>
 
 <th><p>Art Category</p>
   </th>
 
 <th><p>Artist Name</p>
   </th>
 <th><p>Art Details</p>
   </th>

 <th><p>Size</p>
   </th>
 <th><p>Price</p>
   </th>
 </tr>


 <?php
 
 $totalprice=0;
 
 $result9 ="SELECT * FROM mycart where areg='$areg' and status=0 and status1=0";
$result8=mysqli_query($con,$result9);
$i=0;
while($row9 = mysqli_fetch_array($result8))
{ 
if($row9>0){
	$i=1;
	
	
	$art_id=$row9['art_id'];
	$ureg=$row9['ureg'];
	

$result ="SELECT * FROM art where art_id='$art_id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 

$art_name=$row3['artname'];
$price=$row3['price'];
$totalprice+=$price;
$artdetails=$row3['artdetails'];
$img=$row3['artimg'];
$size=$row3['size'];
$cat_id=$row3['artcat_id'];
}
$result2="SELECT * FROM artcategory where artcat_id='$cat_id'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$category=$row4['category'];	
}

$result5="SELECT * FROM uregistration where ureg='$ureg'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$fname=$row5['fnam'];
    $lname=$row5['lnam'];	
}
?>

 <tr><form action="#" method="POST" name="items"><td><img src="<?php echo $img ?>"width="90px" height="90px" border="1" alt="no image found"/></td>    
     <td width="10" valign="center"><input type="text" readonly name="artname" style="border-color:white;" id="artname" value='<?php echo $art_name ?> '></td>
	 <td width="10" valign="center"><input type="text"  readonly name="artcategory" style="border-color:white;"  id="artcategory" value='<?php echo $category ?> '></td>
	 <td width="10" valign="center"><input type="text"  readonly name="artistname" style="border-color:white;"  id="artistname" value='<?php echo $fname." ".$lname ?> '></td>
	 <td width="10" valign="center"><input type="text"  readonly name="artdetails" style="border-color:white;"  id="artdetails" value='<?php echo $artdetails ?> '></td>

	 <td width="10" valign="center"><input type="text"  readonly name="size" style="border-color:white;"  id="size" value='<?php echo $size ?> '></td>
	 <td width="20" valign="center"><input type="text"  readonly name="price" style="border-color:white;"  id="price" value='<?php echo $price ?> '></td>
     <td width="50" valign="center">
	 <input type="hidden" name="hidden_artid" value="<?php echo $art_id; ?>" >
	 <input type="submit" name="cancel" value="cancel the item" id="cancel">
	 </td>
</form></tr>	
<?php
}}
?>

<?php
if($i==1){
?>
</table>
      <div align="right">
	  <form action="#" method="POST">
       <label for="contact-email">Payableamount</label> <input name="pay"  readonly type="text" placeholder="Payableamount" size="25" maxlength="50"style="font-family:Copperplate Gothic Bold;font-size:25px;width:175px;" value='<?php echo $totalprice ?>'>
      </div>
      <div align="left">
            <a href="buyerhome.php"> <input type="button" name="btn" value="Continue Shopping" size="30" maxlength="50" class="button"></a>
      <a href="sam.php"><input type="button" name="btn1"   value="Proceed Payment" size="30" maxlength="50" class="button"></a>
      </form>
      </div>
	  
	  <?php
}
}
	  ?>
</body>
 </html>