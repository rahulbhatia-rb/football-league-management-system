<!DOCTYPE HTML>
<html lang="en_US">
<head>


    <meta charset="utf-8">
    <title>Football League Management System</title>
</head>
<body background="BG.jpg">
    <h1 align="center"><font color="red">Welcome to Football league Management System</font></h1>
<form method="post">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color:red;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: "red";
    color: white;
}
</style>
</head>
<body>

    <table id="customers" style="width:35%" align="center" border="3">
        <tr>
            <td colspan="2" align="center">Player Information</td>
        </tr>
        <tr>
            <td align="left">Enter Player Name</td>
            <td><input type="text" name="FNAME" required></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" name="submit" value="show info"></td>
           
 
</form>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $id=$_POST['FNAME'];
    include('dbcon1.php');
    $sql="SELECT * FROM `player` WHERE `FNAME`='$id'";
    $run=mysqli_query($con,$sql);

    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        ?>
        <table border="1" style="width:45%; margin-top:100px;" align="center" bgcolor="#00FF00">
            <tr>
                <th colspan="3">Player Details</th>
            </tr>
            <tr>
                <th align="left">First Name</th>
                <td><?php echo $data['FNAME']; ?></td>
            </tr>
            <tr>
                <th align="left">Last Name</th>
                <td><?php echo $data['LNAME']; ?></td>
            </tr>
            <tr>
                <th align="left">Teamname</th>
                <td><?php echo $data['TEAMNAME']; ?></td>
            </tr>
            <tr>
                <th align="left">Weight</th>
                <td><?php echo $data['WEIGHT']; ?></td>
            </tr>
            <tr>
                <th align="left">DOB</th>
                <td><?php echo $data['DOB']; ?></td>
            </tr>
            <tr>
                <th align="left">Nationality</th>
                <td><?php echo $data['NATIONALITY']; ?></td>
            </tr>
            <tr>
                <th align="left">Teamname</th>
                <td><?php echo $data['TEAMNAME']; ?></td>
            </tr>
            <tr>
                <th align="left">Kit Number</th>
                <td><?php echo $data['KITNUMBER']; ?></td>
            </tr>
            <tr>
                <th align="left">Position</th>
                <td><?php echo $data['POSITION']; ?></td>
            </tr>

        </table>



<!-- ?php     include('league.php'); ? -->           

        <?php
    }
    else{
        echo "<script> alert('NO player FOUND');</script>";
    }
}
?>



