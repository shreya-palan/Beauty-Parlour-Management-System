<!DOCTYPE HTML>
<head>
<title>LAKME SALON </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script> 
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
			 <div class="logo">
						<a href="index.php"><img src="images/47.png" alt="" /></a>
					</div>
			    <div class="call">
			    	<p><img src="images/45.png" alt="" />Call US: +9108886334</p>
			    </div>
			  			 
			<div class="clear"></div>
  		</div>
  	  </div>
	<div class="header_bottom">
		<div class="wrap">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="login.php">Login</a></li>
			    	<li><a href="Customer_Add.php">Register</a></li>
					<li><a href="services.php">Services</a></li>			    	
			    	<li><a href="about.php">About Us</a></li>
			    
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="clear"></div>
	      </div>	     
	  </div>	
	   <div class="strip"> </div>
    </div> 	     
	  </div>	
    </div>  

 <div class="main">
    <div class="content">
    	 <div class="wrap">
    	     <div class="contact-form">	
					<h2>Login Form</h2><br>
					    <form method="post" action="#">
						    <div>
						    	<span><label>USERNAME/EMAIL ID</label></span>
						    	<span><input name="username" type="text" placeholder="Enter username/email" style="width: 44%;" ></span>
						    </div>
						    <div>
						     	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" placeholder="Enter password" style="width: 44%;"></span>
						    </div>
							<div>
								<span><label><font color="red">HINT:Password should contain only alphabets and digits with min 6 and max 8 characters</font></label></span>
</div>
                            <br>
                            <br>
                                <span><input type="submit" name="submit" value="submit" style="float:left;"></span><br><br><br>
								  
					    </form>  
					  
						
<?php
include "dbconnect.php";
if(isset($_POST['submit']))
{
 	$uname=$_POST['username'];
 	$pwd=$_POST['password'];
	$p=md5($pwd);
	$a=mysqli_query($con,"select * from `tbl_login` where `Username`='$uname' and `Password`='$p' or `Password`='$pwd'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{
		if($row['Role_id']==1 && $row['Log_id']==1)
		{
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:customer_first.php?uid=$row[Reg_id]");
		}
		else if($row['Role_id']==1 && $row['Log_id']!=1)
		{
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:customer_first2.php?uid=$row[Reg_id]");
		}
		else if($row['Role_id']==2)
		{
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:staff_first.php");
			
		}	
		
		else 
		{	
			session_start();
			$_SESSION['username']=$row['Username'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['Reg_id']=$row['Reg_id'];
			header("Location:admin_home.php");
		}
	}
	else
		echo "<script>alert('Username/Password Incorrect')</script>"; 
	}	
?>
				  <div class="clear"></div>
				  </div>
                  <div class="rsidebar span_1_of_3" style="margin-left:700px; margin-top:-250px; ">
				      <h2>Latest News? </h2>
					 <div class="popular-post">
					<div class="post-grid">
						<img src="images/46.jpg" title="post1" alt="">
						<p>How to adapt your make-up if you wear glasses - tips and tricks to enhance your best features</p>
							<div class="clear"> </div>
					  </div>
					    <div class="post-grid">
							<img src="images/7.jpg" title="post1" alt="">
							  <p>Meet the range of luxurious face care products from the house of Lakme.The eyecream always works wonders for wrinkles.</p>
                              <div class="clear"> </div>
						</div>
						<div class="post-grid">
							<img src="images/8.jpg" title="post1" alt="">
							  <p>Lipstick is really magical.It holds the promise of a brilliant smile,a brilliant day both literally and figuratively.</p>
								<div class="clear"> </div>
						</div>
								<div class="clear"> </div>
						</div>
					
				</div>
		 </div>
	   <div class="clear"></div>
       
     </div>
    </div>
  </div>
  <div class="footer-strip"> </div>
 <div class="footer">
   	  <div class="wrap">
   	    <div class="footer_grides">
   	    	<div class="footer_grid1">
					<h3>Information</h3>
								<ul>
						            <li><a href="#">ABOUT US</a></li>
						     		<li><a href="#">PRIVACY POLICY</a></li>
						     		<li><a href="#">NEWSLETTER</a></li>
						     		<li><a href="#">SITE MAP</a></li>						     		
						   	   </ul>	
						
					  	</div>
				<div class="footer_grid2">
					<h3>Get In Touch</h3>
							<div class="address">
							<ul>
						  	 <li>LAKME SALON,</li>
						  	  <li>SURVEY NO 61/3,HOTEL CENTRAL PARK BUILDING,SHIVALLI MANIPAL,</li>
						  	   <li>INDIA</li>
						  	 <li>www.lakmeindia@gmail.com</li>
						  	 <li><span>Phone :</span> +9108886334</li>
						  	 <li><span>Fax :</span> 0001784567898</li>
						  </ul>
				   </div>				  
			     </div>
				<div class="footer_grid3">
					<h3>Our Company</h3>
						<div class="f_menu">
							   <ul>
						            <li><a href="#">ABOUT OUR COMPANY</a></li>
						     		<li><a href="#">TERMS &amp; CONDITIONS</a></li>
						     		<li><a href="#">NEWS</a></li>
						     		<li><a href="#">TEAM OF PROFESSIONALS</a></li>	
						     		<li><a href="#">TESTIMONIALS</a></li>					     		
						   	   </ul>
						</div>
				   </div>				
		  <div class="footer_grid4">
			<h3>Follow US</h3>
				<div class="img_list">
				    <ul>
					     <li><img src="images/28.png" alt=""><a href="#">JOIN US ON FACEBOOK</a></li>
					     <li><img src="images/twitter.png" alt=""><a href="#">FOLLOW US ON TWITTER</a></li>
					     <li><img src="images/39.png" alt=""><a href="#">SHARE US ON TWITTER</a></li>
				    </ul>
				</div>
		 </div>
	   <div class="clear"></div>
     </div>
    </div>
  </div>
<div class="copy_right">
				<p>LAKME SALON © All rights Reseverd</a></p>
		 </div>
</body>
</html>
