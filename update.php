<?php
$servername = "localhost";
$username = "f33ee";
$password = "f33ee";
$dbname = "f33ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$price = $_POST['price'];
$id=$_POST['id'];
//$sql = "UPDATE Sales"."SET `price`=$price"."WHERE `shot`='shot1'"; 
$sql = "UPDATE ". "Sales " ." SET `price` = $price" . " WHERE `id` = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully"; 
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>