<?php
include 'admin_header.php';
?>
				<h1><font color="pink"><center>APPOINTMENTS</h1></font><br>
				<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='5'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Serviced Appointments Yet!!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>SERVICE</th>
<th>DATE</th>
<th>TIME</th>
<th>STAFF</th>
<th>STATUS</th>
<th>PAYMENT</th>
<th></th></tr>
<?php
include 'dbconnect.php';

$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='5'");
	$i=1;
		
	while($row=mysqli_fetch_array($res))
	{
		$a=$row['ser_cat_id'];
		$b=$row['Reg_no'];
		$c=$row['Staff_id'];
	$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
	$row1=mysqli_fetch_array($res1);
	
	$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$b'");
	$row2=mysqli_fetch_array($res2);
	$res3=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$c'");
	$row3=mysqli_fetch_array($res3);
	
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row2['F_name'];?></td>
<td><center><?php echo $row1['ser_cat_name'];?></td>
<td><center><?php echo $row['Date'];?></td>
<td><center><?php echo $row['Time'];?></td>
<td><center><?php echo $row3['F_name'];?> <?php echo $row3['L_name'];?></td>
<?php
$s=$row['Status'];
if($s==1)
{
?>
<td><center><font color="blue"><b><?php echo "Requested";?></b></td>
<?php
}
else if($s==0)
{
?><td><center><font color="blue"><b><?php echo "Approved";?></b></td>
<?php
 }
 else if($s==5)
{
?><td><center><font color="blue"><b><?php echo "Serviced";?></b></td>
<?php }
 else if($s==3)
{
?><td><center><font color="blue"><b><?php echo "Rejected";?></b></td>
<?php } ?>
<td><a href="payment.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Payment Done??')">Paid</td></tr>
<?php
$i++;
}}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f0204a;color: #ffffff;}
tr:nth-child(odd){background-color: #ffffff;color: #000000;}

th {
    background-color: blue;
    color: #ffffff;
}
</style>