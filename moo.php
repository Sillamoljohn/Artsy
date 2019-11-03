<?php 
include 'db.php';
if(!isset($_SESSION["username"]))
{
header("location: ./");
}
if(isset($_POST['sub']))
{
$pid=$_POST['product_id'];
$uid=$_SESSION["userid"];
$qry="insert into booking (userid,product_id,status) values('$uid','$pid','1')";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$q=mysqli_query($con,"update product set status='1' where product_id=$pid");
header('location:buyerhome.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
div.img {
    margin: 5px;
    border: 3px solid #006600;
    position :absolute;
	left:100;
	top:200px;
    width: 300px;
	background-color:#4CAF50;
	height:230px;
	border-radius:13px 13px 13px 13px;
}
.button1 {	width:100px;

	background-color:#33FF99;
	border-radius:13px;
	cursor: pointer;
}
</style>

<body>
<ul>

<li><a href="signout.php">Logout</a></li>
<li><a class="active" href="book.php">Buy</a></li>
<li><a href="Uhome.php">Home</a></li>
<li><a href="Buy.php">Back</a></li>

  
</ul>
<br />
</br>
<?php $pid= $_POST['pid']; 
$qry="select * from product where product_id=$pid";
//$qry="select * from properties,login where properties.userid=login.userid and pid=$pid";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){

?>
<div style="border:0">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $row['image']?>" width="600px" height="400px" style="border:3px solid #006600; border-radius:30px;">
<p>&nbsp;</p>
  <table width="1217" height="56">
    <tr>
      <td width="524">&nbsp;</td>
      <td width="271"> 
      <div class="img">
      <table>
     
    	<tr>
        <td> Property Id: </td>
        <td> <?php echo $row['product_id']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<!--        <tr>
        <td> Location: </td>
        <td> <?php echo $row['location']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr>
        <td> Price: </td>
        <td> <?php echo $row['price']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr>
        <td> Property Description: </td>
        <td> <?php echo $row['pdefinition']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr>
        <td> Contact Person: </td>
        <td> <?php echo $row['name']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr>
        <td> Contact No: </td>
        <td> <?php echo $row['Contact_no']?> </td>
        </tr>-->
        </div>
          
        
    </table><center>
      <form id="form2" name="form2" method="post" action="">
      <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>" />
       <input name="sub" type="submit" class="button1" id="submit" value="Book" onclick="alert('Booked..!we will contact you soon..!');"/>
      </form></center>
      <p>&nbsp;</p></td>
      
    </tr>
  </table>
  </div>
<?php } ?>
<footer><div style="color:white;background-color:#333333;height:30px;"><i style="position:relative;top:8px;">Dreamdesire real estates...All rights Reserved</i><i style="position:relative; top:10px; left:250px; background-color: #333333; layer-background-color: #333333; border: 1px none #000000;">Powered by Dez 
| <a href="#">Top</a></i></div>
</footer>
</body>
</html>
