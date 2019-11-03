

<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>




<?php

$email=$_SESSION['email'];
//echo $email;
?>


<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artsy Buyerhome </title>

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
	height:300px;
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

/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #4ed315;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

/*
redio heading
*/
/* Customize the label (the container) */
.containers {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containers input {
  position: absolute;
  opacity: 0;
}

/* Create a custom radio button */
.checkmarks {
  position: absolute;
  top: 0;
  left: 200px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containers:hover input ~ .checkmarks {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containers input:checked ~ .checkmarks {
  background-color: #4ed315;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmarks:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.containers input:checked ~ .checkmarks:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.containers .checkmarks:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
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
						<li >
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li class="active">
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						
						<li>
							<a href="artistlist.php"><span aria-hidden="true" class="icon_mail"></span><br>Artists</a>
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
                        <h1>Artsy Arts</h1>
                    </div>
                </div>
            </div>
        </div>
          <center>      

<table>

<tr>
	<form action="#" method="post" name="category">
		<td>
		 
			 Select the Category <select name="cat">
				<option value="">select category</option>
				<?php
					$query = "SELECT * FROM artcategory";
					$results = mysqli_query($con, $query);
					foreach ($results as $category) {
				?>
				<option value="<?php echo $category["artcat_id"]; ?>"> <?php echo $category["category"]; ?></option>
				<?php
					}
				?>
			</select>
		</td>
		<td>
			<input type="image" name="search" src="search.png" width="30px" height="30px"/>
			<td width="383" align="right">
<label class="containers">Auctioned arts
  <input type="radio" checked="checked">
  <span class="checkmarks"></span>
</label></td>
	</form>	
</tr>
</table>
<?php
if(isset($_POST['search_x']))
{
	$cat=$_POST['cat'];
	if (strcmp($cat,'select category')==0)
	{
		?>
<table align="center"><center>
<tr align="center"><td align="center">
			<?php 
				$qry="select * from art where status=0";
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

	$price=$ar['price'];
	$artname=$ar['artname'];
	
	$result2="SELECT * FROM uregistration where ureg='$ureg'";
	$result4=mysqli_query($con,$result2);
	while($row4 = mysqli_fetch_array($result4))
	{
	$fname=$row4['fnam'];	
	$lname=$row4['lnam'];	
	
	}
	$sql5="select * from auctionart where art_id='$art_id' order by auctionart_id DESC limit 1";
	echo $sql5;
	$result9=mysqli_query($con,$sql5);
	$row=mysqli_fetch_array($result9);
	$row_qty=count($row);
	$status = $row['status'];
				  ;
	if( $row_qty !=0){
		?>
    
       <form action="moredetails.php" method="post" name="products">
	   
	   
	   
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   <input type="text"  id="txtbox"  name="artist" value='<?php echo $fname?>'>	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'>
				   <input type="radio" name="gender" value="male" checked><br>
					
  					<input type="submit" value="Book Now" name="submit" class="button1"/>
			
					
 				 </div>
				 
			</div>	
		</form>
	<?php
	}
	else{
?>	
<form action="moredetails.php" method="post" name="products">
	   
	   
	   
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   <input type="text"  id="txtbox"  name="artist" value='<?php echo $fname?>'>	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'><br>
					
  					<input type="submit" value="Book Now" name="submit" class="button1"/>
			
					
 				 </div>
				 
			</div>	
		</form>
	<?php
	}
	?>
	</td>
	
 <?php  
}
?>

      </table> 
<?php
	}
	else
	{
		?>
<table>
<tr align="center"><td>
			<?php 
			$cat=$_POST['cat'];


				$qry="select * from art where status=0 and artcat_id='$cat' ";
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

	$price=$ar['price'];
	$artname=$ar['artname'];
	
	$result2="SELECT * FROM uregistration where ureg='$ureg'";
	$result4=mysqli_query($con,$result2);
	while($row4 = mysqli_fetch_array($result4))
	{
	$fname=$row4['fnam'];	
	$lname=$row4['lnam'];	
	
	}?>
    
       <form action="moredetails.php" method="post" name="products">
	   
	   
	   
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   <input type="text"  id="txtbox"  name="artist" value='<?php echo $fname?>'>	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'><br>
					
  					<input type="submit" value="Book Now" name="submit" class="button1"/>
			
					
 				 </div>
				 
			</div>	
		</form>
			
	</td>
	
 <?php  
}
?>

      </table> 
<?php
	}
	}
				else
				{
					
?>				
	<table>
<tr align="center"><td>
			<?php 
				$qry="select * from art where status=0";
				$res=mysqli_query($con,$qry);
				$i=0;
				while($ar=mysqli_fetch_array($res))
				{
					$i++;
					if($i % 4==1)
					{
						echo "<tr>";
		
					}
					$ureg=$ar['ureg'];
					$art_id=$ar['art_id'];

	$price=$ar['price'];
	$artname=$ar['artname'];
	
	$result2="SELECT * FROM uregistration where ureg='$ureg'";
	$result4=mysqli_query($con,$result2);
	while($row4 = mysqli_fetch_array($result4))
	{
	$fname=$row4['fnam'];	
	$lname=$row4['lnam'];	
	
}
$sql5="select * from auctionart where art_id='$art_id' and status=0 ";
	$result9=mysqli_query($con,$sql5);
	$row=mysqli_fetch_array($result9);
	$row_qty=count($row);
	$status = $row['status'];
				  ;
	if( $row_qty !=0){
		?>
    
       <form action="moredetails.php" method="post" name="products">
	   
	   
	   
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   <input type="text"  id="txtbox"  name="artist" value='<?php echo $fname?>'>	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'>
				   
<label class="container">
  <input type="radio" checked="checked">
  <span class="checkmark"></span>
</label>					
  					<input type="submit" value="Book Now" name="submit" class="button1"/>
			
					
 				 </div>
				 
			</div>	
		</form>
	<?php
	}
	else{
		?>
		    
       <form action="moredetails.php" method="post" name="products">
	   
	   
	   
        	<div class="img">
                    <span><img src="<?php echo $ar['artimg']?>" height="200px" width="180px" style=" border-radius: 8px; " alt=""><span class="desc">
                    
                <div class="desc">
					<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><input type="text" style="text-align:left;" id="txtbox" name="price" width="10px" value='<?php echo $ar['price']?>'>
                    
   					 <input type="text"  id="txtbox" style="font-family:Copperplate Gothic Bold;font-size:21px;width:175px;" name="artname" value='<?php echo $ar['artname']?>'>
                   <input type="text"  id="txtbox"  name="artist" value='<?php echo $fname?>'>	 
				   <input type="hidden"  id="txtbox"  name="hiddenartid" value='<?php echo $ar['art_id']?>'><br>
					
  					<input type="submit" value="Book Now" name="submit" class="button1"/>
			
					
 				 </div>
				 
			</div>	
		</form>
	<?php
	}
	?>
			
	</td>
	
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