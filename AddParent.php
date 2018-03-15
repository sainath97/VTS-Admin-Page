<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $phn=$_POST['phno'];
    $stdname=$_POST['sname'];
    $roll=$_POST['rno'];
    $yoj=$_POST['yoj'];
    $bpnt=$_POST['bpnt'];
    $did=$_POST['did'];
    if(mysqli_query($con,"INSERT INTO parent (phone_no,boarding_point,device_id,student_name,roll_no,year_of_join) VALUES ('$phn','$bpnt','$did','$stdname','$roll','$yoj')"))
    	echo "Insert Succesful";
    else
	echo "Not Inserted";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  