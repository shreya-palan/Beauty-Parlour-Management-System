<?php
include 'staff_header.php';
?>
				<?php
include 'dbconnect.php';
$kid =$_GET['uid'];
$_SESSION['id']=$kid;
$select_details = "SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'";
$result = mysqli_query($con , $select_details);
while($row =mysqli_fetch_array($result))
{
	$res=mysqli_query($con,"select Password from tbl_login where Reg_id='$kid'");
	$row2=mysqli_fetch_array($res);
?>
<div><br><h1><b><center><font color="pink">EDIT PROFILE</font></b></h1>
<body>
<form action="staff_edit_action.php" method="post" enctype="multipart/form-data">
<table><font size="4"><img src="Uploads/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -290px; padding-left: 574px; margin-top: -173px;">
<tr><td><b><font color="white">NAME: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" value="<?php echo $row['F_name'];?>"></font></b></td></tr>
<tr>
<?php
if($row['Gender']=="male"){?>
<tr><td><b><font size="3"><font color="white">GENDER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen" value="male" checked="checked" />male<input type="radio" name="gen" value="female" />female</font></td></tr>
<?php
}
else {?>
<tr><td><b><font size="3"><font color="white">GENDER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen" value="male" />male<input type="radio" name="gen" checked="checked" value="female" />female</font></td></tr>
<?php } ?>
</tr>
<tr><td><b><font color="white">HOUSE NAME:&nbsp&nbsp&nbsp&nbsp <input type="text" name="house" value="<?php echo $row['House_name'];?>"></font></b></td></tr>
<tr><td><b><font color="white">CITY: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp <input type="text" name="city" value="<?php echo $row['City'];?>"></font></b></td></tr>
<tr><td><b><font color="white">DISTRICT:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </font></b>
          <select name="district">
		  <option>--Select--</option>
		  <?php
		 
		  $res=mysqli_query($con,"SELECT * FROM `tbl_district`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Dis_id'];?>>	  <?php echo $row1['Dis_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></td>
          </tr>
<tr><td><b><font color="white">PHONE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="phone" value="<?php echo $row['Mobile'];?>"></font></b></td></tr>
<tr><td><b><font color="white">EMAIL: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="email" value="<?php echo $row['Email'];?>"></font></b></td></tr></font>
<tr><td><b><font color="white">PHOTO:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="Image" value="<?php echo $row['Image'];?>"></font></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
?>
<?php
	include 'footer.php';
	
	?>