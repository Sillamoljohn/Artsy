<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>






<?php

$id=$_SESSION['email'];
//echo $id;

$result2="SELECT * FROM uregistration where email='$id'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$ureg=$row4['ureg'];
//echo $ureg;	
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
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
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
		 <p>&nbsp;</p>
	 <?php
		 $query20="Select * from art where ureg='$ureg' and status=0";
			$data10=mysqli_query($con,$query20);
			$fetch10=mysqli_fetch_array($data10);
			if(count($fetch10)==0)
			{
				?>
				<div>
<img src="nothing_to_show.png">
</div>
<?php
}
else{
	?>
		<center>
<table>
<?php 

   
    $qry="select * from art where ureg='$ureg'";
$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
	
  
?>

                   
    	<td>
            <form action="AuctionSettings.php" method="post">
        	<div class="img">
                    <span><img id="image" src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
  				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="Indian_Rupee_symbol.png" height="9px" width="9px"><?php echo $ar['price']?>
   					 <br><div style="font-size:"25px;"><?php echo $ar['artname']?></div>
					 <input type="hidden" name="HiddenArtidForAuction" value="<?php echo $ar['art_id']?>">
					 
					 
					 
					 <?php
					 $f=$ar['art_id'];
					 
					 $results10=mysqli_query($con,"select * from art where art_id='$f'");
						$row10=mysqli_fetch_array($results10);
						$status = $row10["status"];
	
						$results=mysqli_query($con,"select * from auctionart where art_id='$f'");
						$row=mysqli_fetch_array($results);
						$count = count($row);
					
					?>
					
					<a href="AuctionSettings.php?art_id=<?php echo $ar['art_id'];?>" ><input type="button" class="button" name="butn" <?php if ($status == '1' ){ ?> value="SELLED" style = "border-radius: 12px;background-color: #f44336;color: white;" disabled <?php   }
					
					else if ($count >=1 ){ ?> value="AUCTIONED" style = "border-radius: 12px;background-color: #008CBA;color: white;"disabled<?php   }else 
					{ ?> value="SET FOR AUCTION" style = "border-radius: 12px;background-color: #4CAF50;color: white;"<?php   }?> id="butn" /></a>
                    <!-- <input type="submit" value="Select For Auction" name="auction" id="auction"></br>
<!--   					 <br><?php //echo $ar['description']?><br>-->


  
                    
 				 </div>
			</div>
          </form>		</td>
 <?php  
}
?>
      </table> 
<?php
}
?>	  
</center>	


</body>
</html>