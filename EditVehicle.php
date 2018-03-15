<?php
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$vehicleno=$_POST['vno'];
$result=mysqli_query($con,"select * from vehicle where vehicle_no='$vehicleno'");
$row=mysqli_fetch_array($result);
echo "<b><center>Edit the fields you want to modify<center></b><br><br>";
echo "<pre><form method='POST' action='EditVehicle2.php'>
Present Vehicle No      : <input type='text' name='ovno' value='".$row['vehicle_no']."' readonly/><br />
Driver ID	        : <input type='text' name='drid' value='".$row['driver_id']."' required/><br />  
Modified Vehicle No     : <input type='text' name='vno' value='".$row['vehicle_no']."' required/><br />
Device Id               : <input type='text' name='did' value='".$row['device_id']."'/><br />    
<input type='submit' value='Edit to Database' name='submit'/>  
</form></pre>";
mysqli_close($con);
?>