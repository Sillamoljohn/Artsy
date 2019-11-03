


<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
<?php

$id=$_SESSION['email'];
//echo $id;


$result2="SELECT * FROM aregistration where email='$id'";
$result4=mysqli_query($con,$result2);
$row4 = mysqli_fetch_array($result4);

$areg=$row4['areg'];
//echo $ureg;	



if(isset($_POST['submit']))
{


$b=$_POST["artistname"];
echo $b;
$e=$_POST["size"];
$amt = $_POST["price"];
 
 $j="drawimg/".time()."".htmlspecialchars($_FILES['drawimg']['name']);
               move_uploaded_file($_FILES['drawimg']['tmp_name'], $j); 
			   
$sql1="INSERT INTO `drawart`(`ureg`, `areg`,`size`, `img`,`price`) VALUES ('$b','$areg','$e','$j','$amt')";
//echo $sql1;
$result1=mysqli_query($con,$sql1);	

	   echo '<script type="text/javascript">'; 
echo 'alert("Image Uploaded Successfully!!");'; 
echo 'window.location = "userimg.php";';
echo '</script>';;		   
			
} 

 ?>
 

<!DOCTYPE html>
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
						<li>
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li>
							<a href="userimg.php"><span aria-hidden="true" class="icon_house"></span><br>Requested Arts</a>
						</li>
						<li>
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_mail"></span><br>Logout</a>
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
                        <h1> Upload Artworks</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-3" >
                </div>
	               
			<script>
	 function  addUser()
		   {   
			    var x=document.form1.size.value;
				var regx=/^[0-9][0-9][0-9]?[0-9]?x[0-9][0-9][0-9]?[0-9]?$/;
				if(x.length==0)
                 {
					 alert("enter size of art in pixels");
					document.form1.size.focus();
					return false;
				 }
				 
				if(x.match(regx) && x.length>=5)
                 {
					
					return true;
				 }
				 else{
					 alert("enter a valid size");
					document.form1.size.focus();
					return false;
				 }
		   }
				</script>			
	
    <form name="form1" action="#" method="POST" id="form1" enctype="multipart/form-data" onsubmit="return addUser()">

   <table align="center" height="250" width="500">                     
                        
                               

<tr>

    <td><h5 style="color:#7C2816;font-weight:bold">Artist Name</td>
    <td>
	<select name="artistname"style="border-color:white;color:#7C2816;font-weight:bold" required> 
     <option value="">select Artist</option>
     <?php
     $query = "SELECT * FROM uregistration";
     $results = mysqli_query($con, $query);

     foreach ($results as $category) {
       ?>
       <option value="<?php echo $category["ureg"]; ?>"> <?php echo $category["fnam"]. " " .$category["lnam"]; ?></option>

<?php
     }
     ?>
   </select>	                     
   </td>
   </tr><br>
  
  <tr>
    <td width="200" ><h5 style="color:#7C2816;font-weight:bold">Size [l x b]</td>
	
	                    	 						
	<td><input type="text"style="border-color:white;color:#7C2816;font-weight:bold" name="size" id="size"  placeholder="Enter Art size..."  onChange="getPrice(this.value);" ></td>
	</tr>
	
	<tr>
    <td><h5 style="color:#7C2816;font-weight:bold">Price<h5 style="color:#7C2816;"></td>
	                    	 						
	<td><input type="text" style="border-color:white;color:#7C2816;font-weight:bold" id="price" readonly value=" " name="price"></td>
	</tr>

	<script>
		function fileCheckk(obj) {
            var fileExtension = ['jpg','png','jpeg'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
                alert("Only '.jpg','.png','.jpeg' formats are allowed.");
				 document.getElementById('drawimg').value='';
				  $("#drawimg").focus();
				return false;
			}
                
        }
</script>
 <tr><td><h5 style="color:#7C2816;font-weight:bold">Upload Art: </td>
 <td ><input type="file" style="border-color:white;color:#7C2816;font-weight:bold" name="drawimg" id="drawimg"  required onchange="fileCheckk(this)"></td></tr><br>

	      
			  </table>
			 <center> <input type="submit"  name="submit" id="submit" class="button" value="Upload Your Art"></center>
				
    </form>

    </body>
	<script src="js/jquery.js"></script>

<script>
function getPrice(val){
  $.ajax({
    type: "POST",
    url: "CalculatePrice.php",
    data: "size="+val,
    success: function(data){
      $("#price").val(data);

}
});

}
</script>

</html>