 <?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
//get session variable
$email=$_SESSION['email'];

//get user_id using email
$query="select * from uregistration where email='$email'";
$data=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($data);
$ureg=$fetch["ureg"];

//bid accept
if(isset($_POST['accept']))
{
	$bidid=($_POST['hiddenbid']);
 $query33="update bid set status=2 where bid_id='$bidid'";
 $data33=mysqli_query($con,$query33);
 
$query36=" select * from bid where bid_id='$bidid'";
$data66=mysqli_query($con,$query36);
$fetch66=mysqli_fetch_array($data66);
$ar=$fetch66["art_id"];

 $query32="update auctionart set status=1 where art_id='$ar'";
 $data32=mysqli_query($con,$query32);
 
 $query72="update art set status=1 where art_id='$ar'";
 $data72=mysqli_query($con,$query72);
 echo '<script>alert("bid is selected");</script>';
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

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 726px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #D6DBDF;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:  #F1948A;
    color: white;
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
							<li class="active">
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
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
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                 
<div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_profile"></span>
                        <h1>My Sold items</h1>
                    </div>
                </div>
          </div>
        </div>
		<body>
		 <p>&nbsp;</p>
	 <?php
		 $query20="Select * from auctionart where ureg='$ureg' and status=0";
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
	<form action="#" name="sellview" method="post">
	<select name="selectauctionart" >
		<option value="">Select Your Art</option>
		 
		<?php
			$query2="Select * from auctionart where ureg='$ureg' and status=0";
			$data1=mysqli_query($con,$query2);
			while ($fetch1=mysqli_fetch_array($data1))
			{
				 $art_id=$fetch1['art_id'];
				 $query3="select * from art where art_id='$art_id'";
				 $data2=mysqli_query($con,$query3);
				 $fetch3=mysqli_fetch_array($data2);
				 $artname=$fetch3['artname'];
		?>
		<option value="<?php echo $art_id ?>"><?php echo $artname?></option>	
		<?php		
			}		
		?>
		
	</select>
	<input type="submit" name="go" value="Go" id="go">
	     
		 </form>
		
		 <table  id="customers" width="726" border="0" align="center">
<tr>
    <th width="55" style="border-color:white;" scope="row"><div align="center">S/no</div></th>
    <th width="137"style="border-color:white;" ><div align="center"><strong>Bidder Name</strong></div></th>  
    <th width="174"style="border-color:white;" > <div align="center"><strong>Bid date</strong></div></th>
    <th width="182"style="border-color:white;" ><div align="center"><strong>Amount</strong></div></th>
</tr>
<form name="form_accept" method="post" action="#">
<?php
if(isset($_POST['go']))
{
	//get artid from drop down
	$artid=$_POST['selectauctionart'];
	
	$query4="Select * from bid where art_id='$artid'";
	$data8=mysqli_query($con,$query4);
	$i=1;
	while ($fetch9=mysqli_fetch_array($data8))
	{
		$areg=$fetch9['areg'];
		
		
		
		$query7="Select * from aregistration where areg='$areg'";
		$data9=mysqli_query($con,$query7);
		$fetch7=mysqli_fetch_array($data9);
		$fname=$fetch7['fname'];
		$lname=$fetch7['lname'];
		
?>

<tr>
<td  style="padding-top: .8em; border-color:white;"><?php echo $i ?></td>
<td style="border-color:white;" ><?php echo $fname." ".$lname ?></td>
<td style="border-color:white;" ><?php echo $fetch9['date'] ?></td>
<td style="border-color:white;" ><?php echo $fetch9['amount']?> <input type="hidden" name="hiddenbid" value="<?php echo $fetch9['bid_id']?>"><td>
<td style="border-color:white;" ><input type="submit"  Value="Accept"name="accept" id="accept"></td>
<td style="border-color:white;" ><input type="submit" Value="Reject" name="reject" id="reject"></td></tr>
<?php
$i++;	
}}
     
?>
</form>
</table>
<?php
}
?>
</body>
</html>