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
		alert('Id already Exist..!');
		</script>");
	}
}		  

if(TRUE)
{
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql ="SELECT attendancedate, rollno from details where attendancedate='$date' and rollno='$rollno'"; 
	$result=$conn->query($sql); 
	$var=0;
	while($row = $result->fetch_assoc()) 
	{
		$var = 1;
	}									
	if($var==1)
	{ 
		echo ("<script>
		alert('Roll Number already exist..!');
		</script>");
	}
} 

if(TRUE)
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

?>


