<html>
<head>
<style>
center{font-family:"Arial";
font-size:28pt;
padding:300;}
</style>
</head>
<body><center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel_booking";

$conn =new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];


$sql = "INSERT INTO bookings  
        VALUES ('$name', '$date', '$time', '$guests')";

if ($conn->query($sql) === TRUE) {
    echo "Table booked successfully...!";
echo "   Thank You $name...!";
} else {
    echo "Error ";
}

$conn->close();
?>
</center></body>
</html>
