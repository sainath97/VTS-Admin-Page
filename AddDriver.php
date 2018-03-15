<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $phn=$_POST['phno'];
    $dname=$_POST['dname'];
    $drid=$_POST['drid'];
    $epnt=$_POST['epnt'];
    $did=$_POST['did'];
    $vno=$_POST['vno'];
    if(mysqli_query($con,"INSERT INTO driver (driver_name,driver_id,device_id,mobile,end_point,vehicle_no) VALUES ('$dname','$drid','$did','$phn','$epnt','$vno')"))
    	echo "Insert Succesful";
    else
	echo "Not Inserted";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  