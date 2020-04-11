 <html>
	<head><h1> Securex Initial Register</h1>
	</head
 </html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "securex_register";
$fname = $_POST["fname"];
$emailAddress = $_POST["emailAddress"];
$phone = $_POST["phone"];
$acYear = $_POST["acYear"];
$stream = $_POST["stream"];
$roll = $_POST["roll"];
$gender = $_POST["gender"];
$password = $_POST["password"];
echo $fname;
echo $emailAddress;
echo $phone;
echo $acYear;
echo $stream;
echo $roll;
echo $gender;
echo $password;

// Create connection
$conn = new mysqli($servername, $username, $emailAddress, $phone, $acYear, $stream, $roll, $gender, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO register_data (fname, emailAddress, phone, acYear, stream, roll, gender, password)
VALUES ('$fname', '$emailAddress', '$phone', '$acYear', '$stream', '$roll', '$gender', '$password')";

if ($conn->query($sql) === TRUE) {
	 //$last_id = $conn->insert_id;
    echo "New record created. Inserted ID is: " ;//. $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
