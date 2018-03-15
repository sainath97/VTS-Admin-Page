<?php
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$driverid=$_POST['drid'];
$result=mysqli_query($con,"select * from driver where driver_id='$driverid'");
$row=mysqli_fetch_array($result);
echo "<b><center>Edit the fields you want to modify<center></b><br><br>";
echo "<pre><form method='POST' action='AddDriver.php'>
Phone no        : <input type='tel' name='phno' value='".$row['mobile']."' required/><br /> 
Driver name     : <input type='text' name='dname' value='".$row['driver_name']."' required/><br />
Driver ID	: <input type='text' name='drid' value='".$row['driver_id']."' required/><br />  
Vehicle No      : <input type='text' name='vno' value='".$row['vehicle_no']."' required/><br />
End Point       : <input type='text' name='epnt' value='".$row['end_point']."' required/><br />
Device Id       : <input type='text' name='did' value='".$row['device_id']."'/><br />    
<input type='submit' value='Edit to Database' name='submit'/>  
</form></pre>";
$res=mysqli_query($con,"delete from driver where driver_id='$driverid'");
mysqli_close($con);
?>