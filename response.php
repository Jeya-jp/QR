<?php

	$servername = "localhost";
	$username = "id17422434_jp";
	$password = "AxswedcvfrGb1&";
	$dbname = "id17422434_attadance";

	$date = date("Y/m/d");
	$rollno=$_GET["rollno"];
	$id=$_GET["id"];

if(TRUE)
{
	$conn = new mysqli($servername, $username, $password, $dbname);
    $sql ="SELECT attendancedate, id from details where attendancedate='$date' and id='$id'";
	$result=$conn->query($sql); 
	$var=0;
	while($row = $result->fetch_assoc()) 
	{
		$var = 1;
	}
	$conn->close();
	if($var==1)
	{ 
		echo ("<script>
		alert('Invalid Data..!');
		location.replace('https://qr-attadance.000webhostapp.com/index.html');
		</script>");
	}
	else
{					
	$conn = new mysqli($servername, $username, $password, $dbname);				
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}					
	$sql = "INSERT INTO details (attendancedate, rollno, id) VALUES ('$date','$rollno','$id')";
	if ($conn->query($sql) === TRUE) 
	{
		echo "<script>alert('Attendance Recorded')</script>";
	} 
	$conn->close();
}	
}		  
?>


