<!DOCTYPE HTML>
<html lang="en_US">
<body>
<?php
include('header.php');
  $conn=mysqli_connect('localhost','root','','football1');
$sql="SELECT * FROM LEAGUE ORDER BY POSITION";
$run = mysqli_query($conn,$sql);
?>

<table border="1" style="width:45%,margin-top:100px;" align="center" bgcolor="#00FF00">
<tr>
  <th colspan="1">positon</th>
  <th colspan="1">club_name</th>
  <th colspan="1">won</th>
  <th colspan="1">lost</th>
  <th colspan="1">draw</th>
  <th colspan="1">goals_for</th>
  <th colspan="1">goals_against</th>
  <th colspan="1">points</th>
</tr>
<?php
if(mysqli_num_rows($run)>0){
while($row = mysqli_fetch_array($run)) {
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>