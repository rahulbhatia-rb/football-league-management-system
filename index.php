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
        
	<div style="text-align: center;margin: 20px 0;">
            <!--<input type="submit" name="submit" value="view database" onclick="window.location.href='./view.php'"/>-->
		<a href="./view.php" style="background-color:white;">View Database</a>
	</div>
	<div style="text-align: center;margin: 20px 0;">
           
		<a href="./inputrecord.php" style="background-color:white;">Add Player</a>
        </div>    
	<div style="text-align: center;margin: 20px 0;">
		<a href="./league.php" style="background-color:white;">View League Stats</a>
 	</div>	
	<div style="text-align: center;margin: 20px 0;">
	<a href="./fixture.php" style="background-color:white;">Fixtures</a>
        </div>
</body>
</html>
