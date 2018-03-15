<?php    
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$result=mysqli_query($con,"select * from driver");
echo "<b><center>Database Output</center></b><br><br>";
echo "<table border='1'>
<tr>
<th>Driver Name</th>
<th>Driver ID</th>
<th>Device ID</th>
<th>Mobile</th>
<th>End Point</th>
<th>Vehicle Number</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row['driver_name']."</td>";
echo "<td>".$row['driver_id']."</td>";
echo "<td>".$row['device_id']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['end_point']."</td>";
echo "<td>".$row['vehicle_no']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>