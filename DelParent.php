<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $phn=$_POST['phno'];
    if(mysqli_query($con,"DELETE FROM parent WHERE phone_no='$phn'"))
    	echo "Deleted Succesfully";
    else
	echo "Unable to Delete";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  