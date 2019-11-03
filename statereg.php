<?php
include_once 'dbcon.php';
//session_start();
?>


<?php
if (isset($_POST['signup'])) {
    //$categoryid = $_POST['categoryid'];
    $state = $_POST['state'];
    $country = $_POST['country'];
  // echo $category_select;

    
    
   // if ($password1 == $password) {
        //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";

      
        $sql1="INSERT INTO `state`( `state_name`,`con_id`,`status`) VALUES ('$state','$country',1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));


        $p = "select max(state_id) as lgid from state";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("Registration Successful ")</script>';
//    } else {
//
//        echo '<script language="javascript">';
//        echo 'alert("Your password does not match")';
//        echo '</script>';
//    }
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
		
		<link rel="stylesheet" href="css/bootstrap.css">

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
							<a href="admin.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
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
                        <h1>State Registration</h1>
                    </div>
                </div>
            </div>
        </div>
				<script>
		function State(){
            var state= form1.state.value;
                if((state===null)||(state.length<3)){
                    
                    alert("Enter Full Statename");
                    form1.state.focus();
                    return false;
                }
                var state=/^[a-zA-Z]{3,20}$/;
                if(form1.state.value.search(state)==-1)
                 {
                      alert("Enter correct  Statename");
                      form1.state.focus();
                      
                      return false;
                    }
                if((state.length>25)){
                   
                    alert("Statename Must Not Exceed 24 Characters");
                  form1.state.focus();
                    return false;
                }
        }
		
		
		 function  addUser(){
			
			
       var state= form1.state.value;
                if((state===null)||(state.length<3)){
                    form1.state.style.border = "1px solid red";
                    alert("Enter Full State");
                    form1.state.focus();
                    return false;
                }
                var state=/^[a-zA-Z ]{4,25}$/;
                if(form1.state.value.search(state)==-1)
                 {
                      alert("Enter correct  Statename");
                      form1.state.focus();
                      form1.state.style.border = "1px solid red";
                      return false;
                    }
                if((state.length>25)){
                    form1.state.style.border = "1px solid red";
                    alert("Statename Must Not Exceed 24 Characters");
                   form1.state.focus();
                    return false;
                }
				
		 }
		</script>
		
		<form name="form1" class="form-horizontal" method="POST" action="#" enctype="multipart/form-data" onSubmit="return addUser()" >
		
		

        <!-- Form Name -->
       
        <br>
        <br>
        <!-- Text input-->
        
		<div class="form-group">
	<label for="contact-message">Country</label>
	<select name="country" name="country" id="country" onchange="getId(this.value);">
     <option value="">select country</option>
	 <?php
            $q = mysqli_query($con, "SELECT con_id,con_name FROM country where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['con_id'] . '>' . $row['con_name'] . '</option>';
            }
            ?></select>
	 </div>
	
            <label class="col-md-4 control-label" for="name">State Name</label>  
            <div class="col-md-4">
                <input id="state" name="state" type="text" placeholder="Enter State name" class="form-control input-md" required onChange="return State()"="">

            </div>
        </div>            

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
			
                <input type="submit"  style="background-color:#2471A3;" align="center" name="signup" value="ADD STATE" id="signup" class="btn btn-success">
            </div>
        </div>

   
</form>

<script src="js/jquery.js"></script>

<script>
function getId(val){
  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "con_id="+val,
    success: function(data){
      $("#state").html(data);

}
});
}
    </script>

        
        
        </body>
        </html>
		