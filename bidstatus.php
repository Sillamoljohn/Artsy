<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
	<?php
	$email=$_SESSION["email"];
	//echo $email;
	$query1="select * from aregistration where email='$email'";
	$data1=mysqli_query($con,$query1);
	$fetch1=mysqli_fetch_array($data1);
	$areg=$fetch1["areg"];
	//echo $areg;
	
	

?>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artsy Userhome </title>

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
						<li class="active" >
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li >
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						
						<li >
							<a href="artistlist.php"><span aria-hidden="true" class="icon_house"></span><br> Artists</a>
						</li>
						
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>
						</li>
						<li>
							<a href="Changepass.php"><span aria-hidden="true" class="icon_tools"></span><br>Change Password</a>
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
                        <h1>Bid Status</h1>
                    </div>
                </div>
            </div>
        </div>
	<body>
	<?php
			$i=1;
				$qry="select * from bid where areg='$areg'";
				$datas=mysqli_query($con,$qry);
				$fetchs=mysqli_fetch_array($datas);

				if(count($fetchs)==0){
					?>
					<div>
<img src="nothing_to_show.png">
</div>
<?php
}
else{
	?>
				
		<table  id="customers" width="726" border="0" align="center">
			<tr>
				<th width="55" scope="row"><div align="center">S/no</div></th><br>
				<th width="137"><div align="center"><strong>Art Name</strong></div></th>  
				<th width="174"> <div align="center"><strong>Amount</strong></div></th>
				<th width="182"><div align="center"><strong>Date</strong></div></th>
				<th width="182"><div align="center"><strong>Bid Status</strong></div></th>
			</tr>
			
			<?php
			$i=1;
				$query2="select * from bid where areg='$areg'";
				$data2=mysqli_query($con,$query2);
				while($fetch2=mysqli_fetch_array($data2))
				{
					$artid=$fetch2['art_id'];
					$amount=$fetch2['amount'];
					$date=$fetch2['date'];
					$status=$fetch2['status'];
					//echo $status;
					
					$query3="select * from art where art_id='$artid'";
					$data3=mysqli_query($con,$query3);
					$fetch3=mysqli_fetch_array($data3);
					$artname=$fetch3['artname'];
					
					
					$query4="select * from bid where art_id='$artid' and status=2";
					$data4=mysqli_query($con,$query4);
					$fetch4=mysqli_fetch_array($data4);
					//$cnt=count($fetch4);
					
			
					if($status==1)
					{
						$st="Pending";
					}
					
					elseif($status==2)
					{
						$st="Selled";
					}
					
			?>
			<tr><td  style="padding-top: .8em;" width="55" ><div align="center"><?php echo $i ?></div></td>
			    <td width="137" ><div align="center"><?php echo $fetch3['artname'] ?></div></td>
				<td width="174"><div align="center"><?php echo $fetch2['amount'] ?></div></td>  
				<td width="182"><div align="center"><?php echo $fetch2['date'] ?></div></td>
				<td width="182"><div align="center"><?php echo $st ?></div></td>
				
			</tr>
			<?php
				$i++;	
				}
     
			?>
			


		</table>
		<?php
		}
		?>
	</center>
	</body>
</html>
		