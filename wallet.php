<!DOCTYPE html>
<html lang="en">
<?php


	include 'db.php';
if(!isset($_SESSION["username"]))
{
header("location: ./");
}
if(session_status()==PHP_SESSION_NONE)
{
session_start();
}


?>
<head>
        <meta charset="utf-8">
		<title>Shopper</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
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
    
    
    <div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="buyerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                        <li style="float:left" class="style6">
    <?php echo $_SESSION["username"];?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
  
					</nav>
				</div>
			</section>
                    
                    
                    
                    
                    
                    
                    
                    
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
                      
				<h4><span></span></h4>
			</section>
                    <section class="main-content">
                            
                           
				<div class="row">
					
					<div class="span12">					
                                            <center><h4 class="title"><span class="text"><strong>PAYMENT</strong></span></h4></center>
    
    
    
    <?php
      
        if(isset($_POST["gl_wallet_addbtn"])){
            $gl_cardno= htmlspecialchars($_POST['gl_cardno']);
            $gl_bank_name=htmlspecialchars($_POST['gl_bank_name']); 
            $gl_cvv=htmlspecialchars($_POST['gl_cvv']); 
//            $gl_amt=htmlspecialchars($_POST['gl_amt']); 
//            $$gl_amt=htmlspecialchars($_POST["dob"]);
            
//            $sql2="SELECT `amount` FROM `booking` WHERE uname=$uname";
//            $result=mysqli_query($con,$sql2);
//            $t=mysqli_fetch_array($result);
//            $blce_amt=$t['balance'];
           
            $sql4="UPDATE `booking` SET `status1`=1 where `userid`=$_SESSION[userid];";
                $result3=mysqli_query($con,$sql4);
            
                echo "<script> alert('Payment Successfull!Please do get the products from the store!'); </script>";
            }
        
    
    ?>
<center>
    <div class="gl_wallet_container">
        <form class="gl_wallet_form" name="gl_wallet_form" id="gl_wallet_form" action="wallet.php" method="POST"  onsubmit="return addWallet()" enctype="multipart/form-data">
                    <div class="gl_wallet_form_container" align="center">
                       
                        <br><br>
                        <input type="text" placeholder="Enter Card Number" class="form-control input-md" style="width:200px"  name="gl_cardno"  id="gl_cardno" required>
                        <br>
                        <br>
                        <select name="gl_bank_name" id="gl_bank_name" class="form-control input-md" style="width:215px" required>
                            <?php
//                                $sql="Select bank_id, bank_name from bank Order By bank_name;";
//                                $rset=mysqli_query($con,$sql);
//                                $records=mysqli_fetch_array($sql);
//                                echo "<option value=''>Choose a Bank</option>";
//                                foreach($rset as $records){
//                                    
//                                    echo "<option value='{$records["category_id"]}'>{$records["c_name"]}  </option>";
//                                    
//                                }
   ?>
                            <option value="">Choose your bank</option>
                            <option value="SBI">SBI</option>
                            <option value="Federal Bank">Federal Bank</option>
                            <option value="South Indian Bank">South Indian Bank</option>
                           
                        </select>
                        <br/>
                        <br>
                        <input type="text" placeholder="CVV" name="gl_cvv" class="form-control input-md" style="width:200px"  id="gl_cvv" required >
                        <br/>
                        <br>
                         <!--<input type="date" name="dob" id="dob"  class="contact-subject form-control" max="2055-01-01" min="2018-01-01" onkeydown="return false"  >-->
                                
                        <!--<input type="text" placeholder="Amount" name="gl_amt" class="form-control input-md" style="width:200px" id="gl_amt" required>-->
                       
                            <div class="">
                                <button type="button"  class="button1"><a href="buyerhome.php" style="color:white;text-decoration: none;">CANCEL</a></button>
                                <input type="submit" class="button" style="width:100px;" id="gl_wallet_addbtn" name="gl_wallet_addbtn" value="PAY"/>
                            </div>
                          </div>
                </form>
    </div>
    
</center>   
<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contact Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
                                                        <li><a href="./login.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>


