<!DOCTYPE html>
<html lang="en">
<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}

        if(isset($_POST["gl_wallet_addbtn"])){
            $gl_cardnam= htmlspecialchars($_POST['gl_cardnam']);
            $gl_bank_name=htmlspecialchars($_POST['gl_bank_name']); 
            $gl_cvv=htmlspecialchars($_POST['gl_cvv']); 
            $gl_cardno=htmlspecialchars($_POST['gl_cardno']); 

			$s=$_SESSION['email'];
			echo $s;
           $sql1="SELECT * FROM `aregistration` WHERE `email`='$s'";
		   //echo $sql1;
			$result1=mysqli_query($con,$sql1);
			$t1=mysqli_fetch_array($result1);
			$r=$t1["areg"];
			echo $r;
            $sql4="UPDATE `mycart` SET `status1`=1 where `areg`=$r;";
            $result3=mysqli_query($con,$sql4);
            
                echo "<script> alert('Payment Successfull!Please do get the products from the store!'); </script>";
				header("location:paysucc.php");
            }
        
    
?>


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

        <script>
            function addWallet(){
                var gl_cardno=document.gl_wallet_form.gl_cardno.value;
                if(isNaN(gl_cardno)){
                    document.gl_wallet_form.gl_cardno.style.border = "1px solid red";
                    alert("Card Number Only Contain Digits");
                    document.gl_wallet_form.gl_cardno.focus();
                    return false;
                }
                if(gl_cardno.length !== 16){
                    document.gl_wallet_form.gl_cardno.style.border = "1px solid red";
                    alert("Card Number must be 16 Digits");
                    document.gl_wallet_form.gl_cardno.focus();
                    return false;
                }
                
                var gl_cvv=document.gl_wallet_form.gl_cvv.value;
                if(isNaN(gl_cvv)){
                    document.gl_wallet_form.gl_cvv.style.border = "1px solid red";
                    alert("CVV Only Contain Digits");
                    document.gl_wallet_form.gl_cvv.focus();
                    return false;
                }
                if(gl_cvv.length !== 3){
                    document.gl_wallet_form.gl_cvv.style.border = "1px solid red";
                    alert("CVV must be 3 Digits");
                    document.gl_wallet_form.gl_cvv.focus();
                    return false;
                }
                var gl_amt=document.gl_wallet_form.gl_amt.value;
                if(isNaN(gl_amt)){
                    document.gl_wallet_form.gl_amt.style.border = "1px solid red";
                    alert("Amount Contain Digits");
                    document.gl_wallet_form.gl_amt.focus();
                    return false;
                }
				var gl_cardnam= form1.gl_cardnam.value;
                if((gl_cardnam===null)||(gl_cardnam.length<3)){
                    form1.gl_cardnam.style.border = "1px solid red";
                    alert("Enter Full Name");
                    form1.gl_cardnam.focus();
                    return false;
                }
                var gl_cardnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.gl_cardnam.value.search(gl_cardnam)==-1)
                 {
                      alert("Enter correct  Name");
                      form1.gl_cardnam.focus();
                      form1.gl_cardnam.style.border = "1px solid red";
                      return false;
                    }
                if((gl_cardnam.length>25)){
                    form1.gl_cardnam.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.gl_cardnam.focus();
                    return false;
                }
            }
            </script>
            
            
            <style>
                
            .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #3CBC3C;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 14px;
width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #F50000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 14px;
width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}


.a{
    border:solid red;
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
						
						<li >
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						
						<li class="active">
							<a href="#"><span aria-hidden="true" class="icon_house"></span><br>Artists</a>
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
                        <h1>PAYMENT</h1>
                    </div>
                </div>
            </div>
        </div>					
                                           
    
<center>
    <div class="gl_wallet_container">
        <form class="gl_wallet_form" name="gl_wallet_form" id="gl_wallet_form" method="POST" action="#" onsubmit="return addWallet()" enctype="multipart/form-data">
                    <div class="gl_wallet_form_container" align="center">
                       
                        <br>
						
                        <select name="gl_bank_name" id="gl_bank_name" class="form-control input-md" style="width:215px" required>

                            <option value="">Choose your bank</option>
                            <option value="SBI">SBI</option>
                            <option value="Federal Bank">Federal Bank</option>
                            <option value="South Indian Bank">South Indian Bank</option>
                           
                        </select>
                        <br/>
						
                        <input type="text" placeholder="Enter Name On Card " class="form-control input-md" style="width:200px"  name="gl_cardnam"  id="gl_cardnam" required>
                        
						<br>
                        <input type="text" placeholder="Enter Card Number" class="form-control input-md" style="width:200px"  name="gl_cardno"  id="gl_cardno" required>
                        
                        
                        <br>
                        <input type="text" placeholder="CVV" name="gl_cvv" class="form-control input-md" style="width:200px"  id="gl_cvv" required >
                        <br/>
                        
                         <!--<input type="date" name="dob" id="dob"  class="contact-subject form-control" max="2055-01-01" min="2018-01-01" onkeydown="return false"  >-->
                                
                        <!--<input type="text" placeholder="Amount" name="gl_amt" class="form-control input-md" style="width:200px" id="gl_amt" required>-->
                       
                            <div class="">
                                <button type="button"  class="button1"><a href="#" style="color:white;text-decoration: none;">CANCEL</a></button>
                               <input type="submit" class="button" style="width:100px;" id="gl_wallet_addbtn" name="gl_wallet_addbtn" value="PAY"/>
                            </div>
                          </div>
                </form>
    </div>
    
</center>   

    </body>
</html>


