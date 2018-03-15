<?php    
    $user=$_POST['user'];  
    $pass=$_POST['pass'];
    if($user==$pass&&$user=="admin")  
    header("Location: welcome.html");
    else
    {
	echo "Invalid details!";
	echo "<br><a href='webpagelogin.html'>Go to Login Page</a>";
    }   
?>  