<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $ovno=$_POST['ovno'];
    $drid=$_POST['drid'];
    $did=$_POST['did'];
    $vno=$_POST['vno'];
    if(mysqli_query($con,"UPDATE vehicle SET driver_id='$drid', device_id='$did', vehicle_no='$vno' WHERE vehicle_no='$ovno'"))
    	echo "Update Succesful";
    else
	echo "Not Inserted";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  