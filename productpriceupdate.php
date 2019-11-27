<!DOCTYPE html>
<html lang = "en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
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
    //require "createtable.php";
    //require "insert.php";
    require "select.php";
    
    mysqli_close($conn);
?>
<script type = "text/javascript">
    function check1(){
        if (document.getElementById("checkbox1").checked){
            document.getElementById("shot1").hidden = false;
            document.getElementById("price1").hidden = true;
        }else{
            document.getElementById("shot1").innerHTML= <?php echo $shot1["price"];?>;
            document.getElementById("shot1").hidden = true;
            document.getElementById("price1").hidden = false;
            var price=document.getElementById("shot1").value;
            var id=1;
            $.ajax({
            url: "update.php",
            type: "POST",
            data: { "price": price,"id":id}
            })
            document.location.reload();
        }
        //var price
        }
        function check2(){
        
        if (document.getElementById("checkbox2").checked){
            document.getElementById("shot2").hidden = false;
            document.getElementById("shot3").hidden = false;
            document.getElementById("price2").hidden = true;
            document.getElementById("price3").hidden = true;
        }else{
            document.getElementById("shot2").innerHTML= <?php echo $shot2["price"];?>;
            document.getElementById("shot3").innerHTML= <?php echo $shot3["price"];?>;
            document.getElementById("shot2").hidden = true;
            document.getElementById("shot3").hidden = true;
            document.getElementById("price2").hidden = false;
            document.getElementById("price3").hidden = false;
            var price=document.getElementById("shot2").value;
            var id=2;
            $.ajax({
            url: "update.php",
            method: "POST",
            data: { "price": price,"id":id}
            })

            var price=document.getElementById("shot3").value;
            var id=3;
            $.ajax({
            url: "update.php",
            method: "POST",
            data: { "price": price,"id":id}
            })
            document.location.reload();
        }
        //var price
        }
        function check3(){
        
        if (document.getElementById("checkbox3").checked){
            document.getElementById("shot4").hidden = false;
            document.getElementById("shot5").hidden = false;
            document.getElementById("price4").hidden = true;
            document.getElementById("price5").hidden = true;
        }else{
            document.getElementById("shot4").innerHTML= <?php echo $shot2["price"];?>;
            document.getElementById("shot5").innerHTML= <?php echo $shot3["price"];?>;

            document.getElementById("shot4").hidden = true;
            document.getElementById("shot5").hidden = true;
            document.getElementById("price4").hidden = false;
            document.getElementById("price5").hidden = false;
            var price=document.getElementById("shot4").value;
            var id=4;
            $.ajax({
            url: "update.php",
            type: "POST",
            data: { "price": price,"id":id}
            })

            var price=document.getElementById("shot5").value;
            var id=5;
            $.ajax({
            url: "update.php",
            type: "POST",
            data: { "price": price,"id":id}
            })
            document.location.reload();
        }
        //var price
        }
</script>
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
            padding-bottom:10px;}
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
h1 {font-style: bold;
    padding-left: 10px;}
nav ul { list-style-type: none;}
ul a{text-decoration:none;
    font-weight:bold;
    text-align:center;}   
th {text-align:left;}
input,textarea{margin-top:8px;}
.table1{margin-left:auto;margin-right :auto;
        border-style:none; width:600px;}
.size{font-size: 10px; text-align: center;}
.rightalign{text-align:right;}
/* tr:first-of-type{background-color: #D1B48C;}*/
tr:nth-of-type(even) {background-color:#F5F5DD;}
tr:nth-of-type(odd){background-color:#D1B48C;}
td,th{padding:5px 15px;}
.content {padding: 2px 20px 0 20px;} 


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
        <h3>Click to update product prices:</h3>
        <form action = "show_post.php" method="post">
        <table class="table1"  action = ""  >
            <tr>
                <td><input type = "checkbox" id="checkbox1" onchange = "check1()"></td>
                <th>Just Java</th>
                <td> Regular house blend, decaffeinated coffee, or flavor of the day.<br>
                    <label>Endless Cup $ 
                        <input type = "text" size = "1" name = "shot1" id = "shot1"  hidden value = "<?php echo $shot1['price'];?>"> 
                        <span id = "price1"> <?php echo $shot1['price'];?></span>
                    </label>
                
                </td>
            </tr>
            <tr>
                <td><input type = "checkbox" id="checkbox2" onclick = "check2()" ></td>
                <th>Cafe au Lait</th>
                <td>House blended coffee infused into a smooth, steamed milk.<br>
                    <label>
                        Single $<input type = "text" size = "1" name = "shot2" id = "shot2" hidden value = "<?php echo $shot2['price'];?>" >
                        <span id = "price2"> <?php echo $shot2['price'];?>
                    </label>    
                    <label>
                        Double $<input type = "text" size = "1" name = "shot3" id = "shot3" hidden value = "<?php echo $shot3['price'];?>" >
                        <span id = "price3"> <?php echo $shot3['price'];?>
                    </label>
                    
                    
                </td>
            </tr>
            <tr>
                <td><input type = "checkbox" id="checkbox3" onclick = "check3()"></td>
                <th>Iced <br>Cappuccino</th>
                <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
                    <label>Single $
                        <input type = "text" size = "1" name = "shot4" id = "shot4" hidden value = "<?php echo $shot4['price'];?>">
                        <span id = "price4"> <?php echo $shot4['price'];?>
                    </label>
                    <label>Double $
                        <input type = "text" size = "1" name = "shot5" id = "shot5" hidden value = "<?php echo $shot5['price'];?>">
                        <span id = "price5"> <?php echo $shot5['price'];?>
                    </label>
                </td>
            </tr>
            
        </table>
        </form>
        </div>
    </div>

    <footer>
        <small><i>Copyright &copy; 2014 JavaJam Coffee House <br> 
        <a href="mailto:yanyuan@li.com">yanyuan@li.com</a></i></small>
    </footer>
</div>
</body> 

</html>