<?php
include 'admin_header.php';
?>
				
				<h1><font color="pink">ADD ITEMS</h1></font>
        	<form action="add_item_action.php" method="post" enctype="multipart/form-data"><table>
			<tr><td><font color="white">Item Name: &nbsp &nbsp &nbsp <input type="text" name="itemname" placeholder="Enter the Item name here..." required/></font></tr></td>
            <tr><td><font color="white">Brand Name:&nbsp &nbsp </font> 
          <select name="brandname">
		  <option>--Select--</option>
		  <?php
		  include 'dbconnect.php';
		  $res=mysqli_query($con,"SELECT * FROM `tbl_brand`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Brand_id'];?> required>	  <?php echo $row1['Brand_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></tr></td>
                <tr><td><font color="white">Item Category:&nbsp</font> 
          <select name="category">
		  <option>--Select--</option>
		  <?php
		  include 'dbconnect.php';
		  $res=mysqli_query($con,"SELECT * FROM `tbl_item_category`");
		  $r=mysqli_num_rows($res);
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['Item_Cat_id'];?> required>	  <?php echo $row1['Item_Cat_name']; ?></option>
		  <?php
		  }
		  ?>
		</select></tr></td>
				 <tr><td><font color="white">Item Price:  &nbsp &nbsp &nbsp  &nbsp <input type="number" name="price" placeholder="Enter the item price here..." required/></font></tr></td>
				 <tr><td><font color="white">Available Stock: <input type="number" name="stock" placeholder="Enter the stock here..." required/></font></tr></td>
				<tr><td><font color="white">Item Image:  &nbsp &nbsp &nbsp <input type="file" name="image" placeholder="Enter the Brand name here..." required/></font></tr></td>
				<tr><td>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <input  type="submit" name="Save" value="Save"/></tr></td>
				
    		</form>
   <tr><td><a href="admin_item_view.php"><font color="green">View Items</font></a></tr></td>
    </ul>
	
    </div>
	
    </div>
	
</body>
</html>
