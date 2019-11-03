<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>



<?php

$email=$_SESSION['email'];

$c=$_POST["hiddenureg"];
//echo $c;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artist Details</title>

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
	height:270px;
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
							<a href="admin.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
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
                        <h1>Artist Details</h1>
                    </div>
                </div>
            </div>
        </div>
		
		<?php 

   
    $qry="select * from uregistration where ureg='$c'";
$res=mysqli_query($con,$qry);
$ar=mysqli_fetch_array($res);

	$email=$ar['email'];
	$fname=$ar['fnam'];
	$lname=$ar['lnam'];
	$img=$ar['img'];
	$mbno=$ar['mbno'];
	$address=$ar['address'];
	

?>

		<form action="#" method="post" name="moredetails">
	
			<img src="<?php echo $img ?>" width="150" height="150px" style=" border-radius:50px;position:absolute;left:260px;top:240px;">
 
 
	  
     
		<div style="position:absolute;left:450px;top:280px;">
	
       <table cellspacing="20" cellpadding="0" style="margin-top:-120px">
                    
                                <tr>
                                <td>Name</td><td><input type="text" name="artname" id="artname" style="border-color:white;" value='<?php echo $fname." ".$lname ?> ' required readonly="readonly"/></td>
                                </tr>
								<tr></tr>
                            <tr>
                                <td>Email</td><br>
								<td><input type="text" name="email" id="email"  style="border-color:white;"value='<?php echo $email ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                                <td>Contact</td><br>
								<td><input type="text" name="mbno" id="mbno"  style="border-color:white;"value='<?php echo $mbno ?> ' required readonly="readonly"/></td>
                            </tr>
							<td>Address</td><br>
								<td><input type="text" name="address" id="address"  style="border-color:white;"value='<?php echo $address ?> ' required readonly="readonly"/></td>
                            </tr>
                           
                            <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $c ?>'>
                          <!-- <input type="submit" class="button" name="addcart" value="Add To Cart" id="addcart"/></td></tr>-->
						   
						   </form>

		

</div>
</table>

<table><h1>Works Done By The Artist</h1>
<?php 
//$ureg=$_SESSION['$ureg'];
   
    $qry="select * from art where ureg='$c'";
$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$i++;
	if($i % 5==1)
	{
		echo "<tr>";
		
	}
	$ureg=$ar['ureg'];
	$art_id=$ar['art_id'];
     $artimg=$ar['artimg'];
	$price=$ar['price'];
	$artname=$ar['artname'];
	
	$result2="SELECT * FROM uregistration where ureg='$ureg'";
	$result4=mysqli_query($con,$result2);
	while($row4 = mysqli_fetch_array($result4))
	{
	$fname=$row4['fnam'];	
	$lname=$row4['lnam'];	
	
	}

?>
    	<td>
       <form action="moredetails.php" method="post" name="products">
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'><br>
					
  					
			
					
 				 </div>
				 
			</div>	
		</form>
			
	</td>
	</div>
 <?php  
}
?>

      </table>    
</center>	
</body>
</html>

