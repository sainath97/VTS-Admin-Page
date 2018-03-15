<?php    
$con=mysqli_connect('localhost','root','');  
mysqli_select_db($con,'vts');
$result=mysqli_query($con,"select * from vehicle");
echo "<b><center>Database Output</center></b><br><br>";
echo "<table border='1'>
<tr>
<th>Driver ID</th>
<th>Device ID</th>
<th>Vehicle Number</th>
<th>Latitude</th>
<th>Longitude</th>
<th>Time Stamp</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row['driver_id']."</td>";
echo "<td>".$row['device_id']."</td>";
echo "<td>".$row['vehicle_no']."</td>";
echo "<td>".$row['latitude']."</td>";
echo "<td>".$row['longitude']."</td>";
echo "<td>".$row['timestamp']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>