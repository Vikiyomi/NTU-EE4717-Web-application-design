<!DOCTYPE html>
<html lang="en">
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
$sql = "SELECT * FROM Sales ORDER BY quantity ASC"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn,$sql);

//echo $result["quantity"];

mysqli_close($conn);
?>
<head>
<title> JavaJam Coffee House</title>
<meta charset = "utf-8">
<style>
body{background:linear-gradient(135deg,#C5A25E 25%, #FFF7BA 0,
     #FFF7BA 50%, #C5A25E 0, #C5A25E 75%, #FFF7BA 0);
        background-size:3px 3px; 
        font-family: Verdana, Arial, sans-serif;}
header{ background-image:url("header.JPG");
        text-align:center;
        padding: 10px;}
#wrapper{background-color:#e2d2b0;margin:auto;width:80%; min-width:850px;}
#rightcolumn{margin-left: 150px;
            color:#2E0000;
            background-color:#F5F5DD;
            padding-bottom:40px;}
#leftcolumn{color: #ffce99;
            float:left;
            width: 150px;
            list-style-type:none;font-weight:bold;}
#floatleft { margin: 10px;
            float: left;}
a:link {color:#994f00;}
a:visited {color:#C4AA87;}
footer{ float:bottom;
    text-align: center;
    clear:left;
    padding-top:20px;
    padding-bottom:20px;
    background-image: url("header.JPG");}
form{width:350px;
    padding:10px;
    margin-left:20px;}
input[type = checkbox] {zoom: 2;}
label{  display:inline-block;
    width:100px;
    text-align:right;        
    padding-right:10px;}
h1 {font-style: bold;
    padding-left: 10px;}
nav ul { list-style-type: none;}
ul a{text-decoration:none;
    font-weight:bold;
    text-align:center;}   

td,th{text-align:left;padding:5px 15px;}

table{ margin-left:20px;
        border-style:none; width:400px; }

input,textarea{margin-top:8px;}
.content {padding: 2px 20px 0 20px;} 
.home{position:relative;
        left:50px;}
.job{margin-left:6px;}	

/*.largecheckbox{ height:20px;width:20px;}*/

</style>
</head>
<body>
<div id="wrapper">
    <header>
        <h1><img src= "titlename.JPG" alt= "JaveJam Coffee House" width="700"height="86"></h1>
    </header>
    <div id="leftcolumn">
        <nav><ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "menu.html">Menu</a> </li>
            <li><a href = "music.html">Music</a></li>
            <li><a href = "jobs.html">Jobs</a></li>
            <li><a href = "productpriceupdate.php">Product Price Update</a></li>
            <li><a href = "dailysalesreport.php">Daily Sales Report</a></li>
        </ul></nav>
    </div>
    <div id="rightcolumn"> 
        <div class = "content">
            <br>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Quantity </th>
                </tr>
                    
            <?php 
            // $name[1] ="Just Java"; 
            // $name[2] ="Cafe au Lait Single";
            // $name[3] ="Cafe au Lait Double"; 
            // $name[4] ="Iced Cappuccino Single"; 
            // $name[5] ="Iced Cappuccino Double"; 
            $id = 1;  
            $total=0;
            $find_max_qnt=0;
            $find_max_id=0;

            //echo "<table>"; // start a table tag in the HTML
            while($row = mysqli_fetch_array($result)){
             //Creates a loop to loop through results
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['quantity'] . "</td></tr>";  //$row['index'] the index here is a field name
            
            $total = $total + $row['quantity'];

            if ($find_max_qnt<$row['quantity']){
                $find_max_qnt = $row['quantity'];
                $find_max_name = $row['name'];
            }
            $id = $id+1;
            }
            // echo "id".$row['id']."  ";
            //    echo "max".$find_max_qnt."  ";
            //echo "</table>"; //Close the table in HTML
            ?>
            <tr>
                <th>Total</th>
                <th><?php echo $total ?></th>
            </tr>
            </table> 
            <div>
            <br>
               <?php 
                     echo "The most popular drink is ". $find_max_name;
               ?>
               </div>
        </div>
        
    </div>

    <footer>
        <small><i>Copyright &copy; 2014 JavaJam Coffee House <br> 
        <a href="mailto:yanyuan@li.com">yanyuan@li.com</a></i></small>
    </footer>
</div>
</body> 
</html>