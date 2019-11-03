<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
$c=$_GET['art_id'];
	
	//echo $c;

?>



<?php




if(isset($_POST['bid']))
{
	

$email=$_SESSION['email'];
//echo $email;


$logid1= "SELECT * FROM aregistration WHERE email='$email'";
	$re=mysqli_query($con,$logid1);
	$ro=mysqli_fetch_array($re);
	$areg=$ro["areg"];
	//echo $areg;
	//echo $logid1;

$logid= "SELECT * FROM auctionart WHERE art_id='$c'";
	$result2=mysqli_query($con,$logid);
	$row=mysqli_fetch_array($result2);
	$p=$row["ureg"];
	
	
	$m=$_POST["sprice"];
	//echo $m;
	$price=$row["auction_price"];
	//echo $price;
	//echo "<script> alert($price);</script>";
	if($price <= $m)
	{	
$c=$_POST["hiddenartid"];
	 $sql1="INSERT INTO `bid`( `ureg`, `areg`, `amount`,  `art_id`) VALUES  ('$p','$areg','$m','$c')";
	// echo "$sql1";
	$result1=mysqli_query($con,$sql1)or die(mysqli_error($con));;
	echo '<script type="text/javascript">'; 
echo 'alert("Your bid is Successfully Submitted..");'; 
echo 'window.location = "buyerhome.php";';
echo '</script>';;
	 
	}
	else{
		echo"<script>alert('Bid is too low');</script>";
		
	}
	
	
//header('location:biditemview.php');
}

	
/* $res="SELECT * FROM aregistration WHERE email='$email'";
	$result11=mysqli_query($con,$res);
	while($row=mysqli_fetch_array($result11))
	{
		$areg=$row["areg"];
		
	} */ 
	


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Auction Art Details</title>

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
						<li >
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_camera"></span><br>BUY ART</a>
						</li>
						<li class="active">
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
                        <h1> Auction Art Details</h1>
                    </div>
                </div>
            </div>
        </div>
		
		<?php 

   $c=$_REQUEST['art_id'];
    $qry="select * from art where art_id='$c'";
	//echo $qry;
$res=mysqli_query($con,$qry);
$ar=mysqli_fetch_array($res);

    $ureg=$ar['ureg'];
	//echo $ureg;
	$sartname=$ar['artname'];
	$sartimg=$ar['artimg'];
	$sartdetails=$ar['artdetails'];
	$ssize=$ar['size'];
	$sprice=$ar['price'];
	
	$qry="select * from uregistration where ureg='$ureg'";
$res=mysqli_query($con,$qry);
$ar=mysqli_fetch_array($res);

	$fnam=$ar['fnam'];
	$lnam=$ar['lnam'];
	
	
	

?>

		<form action="#" method="post" name="moredetails">
	
			<img src="<?php echo $sartimg ?>" width="250px" height="170px" style=" border-radius:30px;position:absolute;right:500px;top:280px;">
 
 
	  
     
		<div style="position:absolute;left:250px;top:350px;">
	
       <table cellspacing="20" cellpadding="0" style="margin-top:-120px">
                    
                                <tr>
                                <td>Art Name</td><td><input type="text" name="sartname" id="sartname" style="border-color:white;" value='<?php echo $sartname ?> ' required readonly="readonly"/></td>
                                </tr>
								<tr></tr>
                            <tr>
							<tr>
                                <td>Artist Name</td><td><input type="text" name="sartistname" id="sartistname" style="border-color:white;" value='<?php echo $fnam." ".$lnam ?> ' required readonly="readonly"/></td>
                                </tr>
								<tr></tr>
                            <tr>
                                <td>Art Details</td><br>
								<td><input type="text" name="sartdetails" id="sartdetails"  style="border-color:white;"value='<?php echo $sartdetails ?> ' required readonly="readonly"/></td>
                            </tr>
							<tr>
                                <td>Size</td><br>
								<td><input type="text" name="ssize" id="ssize"  style="border-color:white;"value='<?php echo $ssize ?> ' required readonly="readonly"/></td>
                            </tr>
							<td>Price</td><br>
								<td><input type="number"  min="1000"  style="border-color:white;"name="sprice" id="sprice"	onkeypress="javascript:return isNumber(event)" required></td>
                            </tr>
                           
                            <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $c ?>'>
                          <tr><input style="position:absolute;top:150px;"type="submit" class="button" name="bid" value="Submit Your Bid" id="bid"/></td></tr>
						   
						   </form>

		

</div>
</table>



			
	

  </center>	
</body>
</html>