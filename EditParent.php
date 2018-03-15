<?php
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$phn=$_POST['phno'];
$result=mysqli_query($con,"select * from parent where phone_no='$phn'");
$row=mysqli_fetch_array($result);
echo "<b><center>Edit the fields you want to modify<center></b><br><br>";
echo "<pre><form method='POST' action='AddParent.php'>
Phone no        : <input type='tel' name='phno' value='".$row['phone_no']."' required/><br /> 
student name    : <input type='text' name='sname' value='".$row['student_name']."' required/><br />
Roll no	        : <input type='text' name='rno' value='".$row['roll_no']."' required/><br />  
Year of Joining : <input type='text' name='yoj' value='".$row['year_of_join']."' required/><br />
Boarding Point  : <input type='text' name='bpnt' value='".$row['boarding_point']."' required/><br />
Device Id       : <input type='text' name='did' value='".$row['device_id']."'/><br />    
<input type='submit' value='Edit to Database' name='submit'/>  
</form></pre>";
$res=mysqli_query($con,"delete from parent where phone_no='$phn'");
mysqli_close($con);
?>