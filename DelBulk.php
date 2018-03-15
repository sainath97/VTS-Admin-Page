<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $yoj=$_POST['yoj'];
    if(mysqli_query($con,"DELETE FROM parent WHERE year_of_join='$yoj'"))
    	echo "Deleted Succesfully";
    else
	echo "Unable to Delete";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>