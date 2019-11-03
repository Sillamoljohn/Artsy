<?php
include 'dbcon.php';
$id=$_SESSION['email'];
//echo $id;
$result ="SELECT * FROM uregistration where email='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['fnam'];
$lname=$row3['lnam'];

}


$result2="SELECT * FROM uregistration where email='$id'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$ureg=$row4['ureg'];
//echo $ureg;	
}


if(isset($_POST['submit']))
{


$b=$_POST["artname"];
$c=$_POST["category"];
$d=$_POST["artdetails"];
$e=$_POST["size"];
$f=$_POST["price"];

 
 $j="artimg/".time()."".htmlspecialchars($_FILES['artimg']['name']);
               move_uploaded_file($_FILES['artimg']['tmp_name'], $j); 
			   
$sql1="INSERT INTO `art`( `artname`, `artdetails`, `artimg`, `size`, `price`,`artcat_id`,`ureg` ) VALUES ('$b','$d','$j','$e','$f','$c','$ureg')";
$result1=mysqli_query($con,$sql1);	

	   
			   
			   
		echo"<script>alert('Data Entered Successfully');</script>";
	header('location:buyerhome.php');	
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

    </head><script>

	
function Art(){
            var artname= form1.artname.value;
                if((artname===null)||(artname.length<3)){
                    
                    alert("Enter Full ArtName");
                    form1.artname.focus();
                    return false;
                }
                var artname=/^[a-zA-Z]{3,20}$/;
                if(form1.artname.value.search(artname)==-1)
                 {
                      alert("Enter correct  ArtName");
                      form1.artname.focus();
                      
                      return false;
                    }
                if((artname.length>25)){
                   
                    alert("ArtName Must Not Exceed 24 Characters");
                  form1.artname.focus();
                    return false;
                }
        }
		
 
        function Artd(){
            var artdetails= form1.artdetails.value;
                if((artdetails===null)||(artdetails.length<3)){
                    
                    alert("Enter Full Artdetails");
                    form1.artdetails.focus();
                    return false;
                }
                var artdetails=/^[a-zA-Z]{3,20}$/;
                if(form1.aartdetails.value.search(artdetails)==-1)
                 {
                      alert("Enter correct  Artdetails");
                      form1.artdetails.focus();
                      
                      return false;
                    }
                if((artdetails.length>100)){
                   
                    alert("Artdetails Must Not Exceed 99 Characters");
                  form1.artdetails.focus();
                    return false;
                }
        }
		
        function  addUser()
		{
			
			
       var artname= form1.artname.value;
                if((artname===null)||(artname.length<2)){
                    form1.artname.style.border = "1px solid red";
                    alert("Enter Full ArtName");
                    form1.artname.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.artname.value.search(fnam)==-1)
                 {
                      alert("Enter correct  ArtName");
                      form1.artname.focus();
                      form1.artname.style.border = "1px solid red";
                      return false;
                    }
                if((artname.length>25)){
                    form1.artname.style.border = "1px solid red";
                    alert("  ArtName Must Not Exceed 24 Characters");
                   form1.artname.focus();
                    return false;
                }
				
		 var artdetails= form1.artdetails.value;
                if((artdetails===null)||(artdetails.length<2)){
                    form1.artdetails.style.border = "1px solid red";
                    alert("Enter Full Artdetails");
                    form1.artdetails.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.artdetails.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Artdetails");
                      form1.artdetails.focus();
                      form1.artdetails.style.border = "1px solid red";
                      return false;
                    }
                if((artdetails.length>100)){
                    form1.artdetails.style.border = "1px solid red";
                    alert("  Artdetails Must Not Exceed 99 Characters");
                   form1.artdetails.focus();
                    return false;
                }
				
				
		
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
						<li>
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li>
							<a href="Login.php"><span aria-hidden="true" class="icon_mail"></span><br>Logout</a>
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
                        <h1> Art Details</h1>
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
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
                    
	                    <h3>&nbsp;</h3>
                        
                        
 <form name="form1" action="#" method="POST" id="form1" enctype="multipart/form-data" onsubmit="return addUser()">
                                <form action="">
								<div class="form-group">
	                  		<label for="artist-name">Artist Name</label>
	                       	<input type="text" name="fname"  id="fname" placeholder="Enter   Artistname..." class="contact-name form-control""contact-name" value='<?php echo $fname." ".$lname  ?> '>
	                      </div>
	                    	<div class="form-group">
	                    		<label for="art_name">Art Name</label>
	                	<input type="text" name="artname" id="artname" placeholder="Enter Artname..." class="contact-email form-control" id="contact-email" required onChange="return Art()" >
	                        </div>
	                        <div class="control-group">
									<label class="control-label"><b>Category:</b></label>
									<div class="controls">
									<select name="category" > 
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
                                                                            
								</div>
	                        <div class="form-group">
	                        	<label for="art_details">Art Details</label>
	          	<textarea name="artdetails" id="artdetails" rows="3" cols="5" placeholder="Enter Art Details..." class="contact-subject form-control"required onChange="return Artd()" ></textarea>
	                        </div> 
							
	 <div class="form-group">
	 <label for="art_size">Size</label>
	<input type="text" name="size" id="size" placeholder="Enter Art size..." class="contact-message form-control">
    </div>
	<div class="form-group">
	<label for="art_price">Price</label>
	<input type="text" name="price" id="price" placeholder="Enter art price..." class="contact-subject form-control" id="contact-subject">
	
    </div>
	
	                    <div>	<label for="contact_image"> Upload Your ArtWork: </label>
   <input type="file" name="artimg" id="artimg"  required></div>
	                       <center> <button type="submit"  name="submit" id="submit" class="btn"<a href="buyerhome.php">Post An ArtWork</a></button></center>
                           
	                    </form>
							
						
						
						
						
						
		
                        
                         
                        
                        
                        
                  </div>
	            </div>
	        </div>
        </div>

       
	              
	        
        




    </body>

</html>