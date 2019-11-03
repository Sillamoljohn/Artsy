<?php
include 'dbcon.php';
?>
	    <?php
 $email=$_SESSION['email'];
 $result15 ="SELECT * FROM aregistration where email='$email'";
$result16=mysqli_query($con,$result15);
$row15 = mysqli_fetch_array($result16);

$areg=$row15['areg'];

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
    background-color:  #52BE80;
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
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
						</li>
						<li>
						<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>BUY ARTS</a>
						</li>
						<li>
						<a href="artistlist.php"><span aria-hidden="true" class="icon_house"></span><br>ARTISTS</a>
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
                        <h1>My Orders completed</h1>
                    </div>
                </div>
          </div>
        </div>
		<body>
		 <p>&nbsp;</p>
		 <?php
		 $result25 ="SELECT * FROM mycart where status1=1 and areg=$areg";
$result26=mysqli_query($con,$result25);
$row25 = mysqli_fetch_array($result26);
if(count($row25)==0){
	?>
	<div>
<img src="nothing_to_show.png">
</div>
<?php
}
else{
	?>
		 <table  id="customers"width="726" border="1" align="center">
<tr>
                        <th width="55" scope="row"><div align="center">S/no</div></th>
    <th width="137"><div align="center"><strong>Art Name</strong></div></th>
    
    <th width="174"> <div align="center"><strong>Artist Name</strong></div></th>
    <th width="182"><div align="center"><strong>Price</strong></div></th>
           </tr>
	<?php
 $totalprice=0;
 $i=1;
 $result9 ="SELECT * FROM mycart where status1=1 and areg=$areg";
$result8=mysqli_query($con,$result9);
while($row9 = mysqli_fetch_array($result8))
{ 
	$art_id=$row9['art_id'];
	$ureg=$row9['ureg'];
	


$result ="SELECT * FROM art where art_id='$art_id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 

$art_name=$row3['artname'];
$price=$row3['price'];
$totalprice+=$price;
}

$result9 ="SELECT * FROM mycart where art_id='$art_id'";
$result10=mysqli_query($con,$result9);
while($row9 = mysqli_fetch_array($result10))
{ 
$areg=$row9['areg'];
}

$result11 ="SELECT * FROM uregistration where ureg='$ureg'";
$result12=mysqli_query($con,$result11);
while($row11 = mysqli_fetch_array($result12))
{ 
$af=$row11['fnam'];
$al=$row11['lnam'];
}



?>

                      <tr>
                        <td><div align="center"><?php echo $i;?></div></td>
                        <td><div align="center"><?php echo $art_name;?></div></td>
                        <td><div align="center"><?php echo $af." ".$al;?></div></td>
                        <td><div align="center"><?php echo $price;?></div></td>
                      </tr>
					  <?php
					  $i++;
}
?>
                    </table>
					<?php
}
?>
</body>
		</html>