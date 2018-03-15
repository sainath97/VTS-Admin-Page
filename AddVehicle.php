<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $drid=$_POST['drid'];
    $did=$_POST['did'];
    $vno=$_POST['vno'];
    if(mysqli_query($con,"INSERT INTO vehicle (latitude,longitude,driver_id,device_id,vehicle_no) VALUES ('','','$drid','$did','$vno')"))
    	echo "Insert Succesful";
    else
	echo "Not Inserted";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  