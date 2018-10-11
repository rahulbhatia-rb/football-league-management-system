<?php
   // include('header.php');
$conn=mysqli_connect('localhost','root','','football1');
?>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<h1 align="center" bgcolor="red"> Inserting a Player Into the Database</h1>
</head>

<body> 
        
   <body background="BG.jpg">     
    <div class="contaianer">


    <form method="post" >
<div class="form-group">
        <table align="center" border="1" style="width:30%; margin-top:80px;" class="table table-striped table-bordered table-condensed table-hover" bgcolor="#00FF00">
            <tr>
                 
                <th  align="left"><label>Player ID</label></th>
                <td><input type="text" name="PLAYERID" class="form_control" placeholder="Enter ID" required/></td>
            </tr>
            <tr>
                <th  align="left"><label>First Name</label></th>
                <td><input type="text" name="FNAME" class="form_control" placeholder="Enter First name" required/></td>
            </tr>
            <tr>
                <th  align="left"><label>Middle Name</label></th>
                <td><input type="text" name="MNAME" class="form_control" placeholder="Enter Middle name" required/></td>
            </tr>
            <tr>
                <th  align="left"><label>Last Name</label></th>
                <td><input type="text" name="LNAME" class="form_control" placeholder="Enter Last Name" required/></td>
            </tr>
            <tr>
                <th  align="left"><label>Date Of Birth</label></th>
                <td><input type="text" name="DOB" class="form_control" placeholder="YYYY-MM-DD" required/></td>
            </tr>
            
            <tr>
                <th  align="left"><label>Position</label></th>
                <td><input type="text" name="POSITION" class="form_control" placeholder="Enter Position" required/></td>
            </tr>
            <tr>
                <th  align="left"><label>Weight</label></th>
                <td><input type="text" name="WEIGHT" class="form_control" placeholder="Enter Weight" required/></td>
            </tr>
 <tr>
                <th  align="left"><label>Height</label></th>
                <td><input type="text" name="HEIGHT" class="form_control" placeholder="Enter Height" required/></td>
            </tr>
 <tr>
                <th  align="left"><label>Nationality</label></th>
                <td><input type="text" name="NATIONALITY" class="form_control" placeholder="Enter Nationality" required/></td>
            </tr>
 <tr>
                <th  align="left"><label>Kit Number</label></th>
                <td><input type="text" name="KITNUMBER" class="form_control" placeholder="Enter Kitnumber" required/></td>
            </tr>
 <tr>
                <th  align="left"><label>Team Name</label></th>
                <td><input type="text" name="TEAMNAME" class="form_control" placeholder="Enter Teamname" required/></td>
            </tr>
 <tr>
                <th  align="left"><label>Contract ID</label></th>
                <td><input type="text" name="CONTRACTID" class="form_control" placeholder="Enter ContractID" required/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="Submit" class="btn btn-danger"/></td>
            </tr>
        </table>
</div>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
 
     $playerid=mysqli_real_escape_string($conn,($_POST['PLAYERID']));
    $fname=mysqli_real_escape_string($conn,($_POST['FNAME']));
    $mname=mysqli_real_escape_string($conn,($_POST['MNAME']));
    $lname=mysqli_real_escape_string($conn,($_POST['LNAME']));
 $dob=mysqli_real_escape_string($conn,($_POST['DOB']));
 $pos=mysqli_real_escape_string($conn,($_POST['POSITION']));
 $weight=mysqli_real_escape_string($conn,($_POST['WEIGHT']));
 $height=mysqli_real_escape_string($conn,($_POST['HEIGHT']));
 $nationality=mysqli_real_escape_string($conn,($_POST['NATIONALITY']));
 $kit=mysqli_real_escape_string($conn,($_POST['KITNUMBER']));
 $team=mysqli_real_escape_string($conn,($_POST['TEAMNAME']));
 $contract=mysqli_real_escape_string($conn,($_POST['CONTRACTID']));

        $qry="INSERT INTO `player`(`PLAYERID`, `FNAME`, `MNAME`, `LNAME`, `DOB`,`POSITION`, `WEIGHT`, `HEIGHT`,`NATIONALITY`, `KITNUMBER`, `TEAMNAME`, `CONTRACTID`) VALUES ('$playerid','$fname','$mname','$lname','$dob','$pos','$weight','$height','$nationality','$kit','$team','$contract')";

        $run=mysqli_query($conn,$qry); 
        echo (mysqli_error($conn));
        if($run==true){
            ?>
            <script>
                alert('Data Inserted Successfully');
            </script>
            <?php
        }
    }
?>
