


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
while($row4 = mysqli_fetch_array($result4))
{
	$areg=$row4['areg'];
//echo $ureg;	
}


if(isset($_POST['submit']))
{


$b=$_POST["artistname"];
echo $b;
$e=$_POST["size"];


 
 $j="drawimg/".time()."".htmlspecialchars($_FILES['drawimg']['name']);
               move_uploaded_file($_FILES['drawimg']['tmp_name'], $j); 
			   
$sql1="INSERT INTO `drawart`(`ureg`, `areg`,`size`, `img`) VALUES ('$b','$areg','$e','$j')";
$result1=mysqli_query($con,$sql1);	

	   
			   
			   
		echo"<script>alert('Art Posted Successfully');</script>";
	header('location:drawart.php');	
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
			
			function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
        </script>
		
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
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
                    
	                    <h3>&nbsp;</h3>
						
						
                        
                        
 <form name="form1" action="#" method="POST" id="form1" enctype="multipart/form-data" onsubmit="return addUser()">
                                <form action="">
								<div class="form-group">
	                  		<label for="artist-name">Artist Name</label>
<div class="controls">
									<select name="artistname" > 
     <option value="">Select Artist</option>
     <?php
     $query = "SELECT * FROM uregistration";
     $results = mysqli_query($con, $query);

     foreach ($results as $category) {
       ?>
       <option value="<?php echo $category["ureg"]; ?>"> <?php echo $category["fnam"]. " " .$category["lnam"]; ?></option>

<?php
     }
     ?>
   </select>	                      </div>
	                    	 
							
	 <div class="form-group">
	 <label for="art_size">Size [length x breadth]</label>
	<input type="text" name="size" id="size" placeholder="Enter Art size..." class="contact-message form-control">
    </div>
	
	                    <div>	<label for="contact_image"> Upload Your ArtWork: </label>
   <input type="file" name="drawimg" id="drawimg"   required onchange="fileCheckk(this)"></div>
	                       <center> <input type="submit"  name="submit" id="submit" class="button" value="Upload Your Art"></center>
                           
	                    </form>
							
						      
                        
                  </div>
	            </div>
	        </div>
        </div>

       
	              
	        
        




    </body>

</html>