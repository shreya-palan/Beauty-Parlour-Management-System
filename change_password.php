<?php
include 'admin_header.php';
?>


<script type="text/javascript">
function validate()
{
var pas1=document.getElementById("txtnewpwd");
							  var pas2=document.getElementById("txtconfirmpwd");
							
							  if(pas1.value=="")
	{
		alert("Password cant be null!!");
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		alert("Please confirm password!!");
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		alert("Passwords does not match!!");
		pas1.focus();
		return false;
	}
	
        {  alert("Request Send!!"); }
      
	
	
}
</script>
<?php
error_reporting(0);
//session_start();
$uname=$_SESSION['username'];
 ?>

 
                                 <form action="password_action.php" method="post" onsubmit="return validate()">
								
                                       <br><br>
									   <div align="center">
									         <?php
                                     if($_GET['s']==1)
                                     {
                                         echo "<script>alert('Password Has Changed!!')</script>";
                                     }
                                     else if($_GET['s']==2)
                                     {
                                        echo "<script>alert('The Password could not be changed due to some internal errors!!')</script>";
                                     }
                                     ?>
									<!-- <br><br><br><br><br><br><br><br>
                                    <div align="center" > 
                                   <fieldset style="width:35%">
									<legend>Change password</legend>-->
									<h1><font color="pink">CHANGE PASSWORD</h1></font><br>
                                      <table class="tb">
<tr>
<td></td>
</tr>
		<tr>
                                             <td><b><font color="white">Old Password</b></td><td><input type="password" name="old" id="txtoldpwd"/></font></td>
                                         </tr>
                                           <tr>
                                             <td><b><font color="white">New Password</b></td><td><input type="password" name="new" id="txtnewpwd"/></font></td>
                                         </tr>
                                          <tr>
                                             <td><b><font color="white">Confirm Password</b></td><td><input type="password" name="confirm" id="txtconfirmpwd"/></font></td>
                                         </tr>
                                         <tr>
                                             <td></td><td><input type="submit" name="changepwd" id="txtchangepwd" value="Change"/></td>
                                         		</tr>
		<tr>
<td></td>
</tr>
</table>


</div>
</form>
</body>
                   
   <div class="clear"></div>
     </div>
    </div>
  </div>
<div class="copy_right">
				<p>LAKME SALON © All rights Reseverd </a></p>
		 </div>
</body>
</html>
</html>
