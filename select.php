<!DOCTYPE html>
<html lang="en">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
/*First, we set up an SQL query that selects the id, firstname and lastname columns from the MyGuests table. The next line of code runs the query and puts the resulting data into a variable called $result.

Then, the function num_rows() checks if there are more than zero rows returned.

If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through. The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
*/

$sql = "SELECT * FROM Sales WHERE shot ='shot1' ";
$result = mysqli_query($conn, $sql);
$shot1 = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM Sales WHERE shot ='shot2' ";
$result = mysqli_query($conn, $sql);
$shot2 = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM Sales WHERE shot ='shot3' ";
$result = mysqli_query($conn, $sql);
$shot3 = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM Sales WHERE shot ='shot4' ";
$result = mysqli_query($conn, $sql);
$shot4 = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM Sales WHERE shot ='shot5' ";
$result = mysqli_query($conn, $sql);
$shot5 = mysqli_fetch_assoc($result);

//echo $shot5["price"];


mysqli_close($conn);
?>
</html>