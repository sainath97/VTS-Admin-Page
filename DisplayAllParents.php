<?php    
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$result=mysqli_query($con,"select * from parent");
echo "<b><center>Database Output</center></b><br><br>";
echo "<table border='1'>
<tr>
<th>Phone</th>
<th>Boarding Point</th>
<th>Device ID</th>
<th>Student Name</th>
<th>Roll No</th>
<th>Year of Joining</th>
<th>Flag</th>
<th>Time Stamp</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row['phone_no']."</td>";
echo "<td>".$row['boarding_point']."</td>";
echo "<td>".$row['device_id']."</td>";
echo "<td>".$row['student_name']."</td>";
echo "<td>".$row['roll_no']."</td>";
echo "<td>".$row['year_of_join']."</td>";
echo "<td>".$row['flag']."</td>";
echo "<td>".$row['timestamp']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>