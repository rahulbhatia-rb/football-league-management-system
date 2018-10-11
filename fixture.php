<!DOCTYPE HTML>
<html lang="en_US">
<body>
<?php
include('header.php');
  $conn=mysqli_connect('localhost','root','','football1');
$sql="SELECT * FROM FIXTURES";
$run = mysqli_query($conn,$sql);
?>


<table border="1" style="width:45%,margin-top:100px;" align="center" bgcolor="#00FF00">
<tr>
  <th colspan="1">Fixture</th>
  <th colspan="1">Date</th>
</tr>
<?php
//if(mysqli_num_rows($run)>0){
while($row = mysqli_fetch_array($run)) {
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td>";
echo "</tr>";
}
//}
?>
</table>
</body>
</html>