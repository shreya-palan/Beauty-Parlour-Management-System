<?php
include 'admin_header.php';
include 'dbconnect.php';
?>
<h1><font color="pink">CUSTOMERS</h1> </font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=1 and `Mobile`!=76543567865");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Customers were Registered Yet!!!</font></center>";
}
else
{
?>
<table>
          <td><font size=5><font color="white">
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Status`=1 and `Reg_id`!=1");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  { 
echo "<br>".$i. ".";	  
		  ?>
		 
		 <a href= "customer_view.php?uid=<?php echo $row['Reg_id'];?>"<?php echo $row['Reg_id'];?>>	  <?php echo $row['F_name']; ?>&nbsp<?php echo $row['L_name']; ?> </a><br>
		  <?php
		  $i++;
}}
		  ?></a>
		  </td>
          </tr></table>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #db4faf}

th {
    background-color: #1b7ccc;
    color: #ffffff;
}
</style>