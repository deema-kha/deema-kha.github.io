<?php
//connecting
$host = "localhost";
$user ="root";
$pass = "12345";
$db = "testt";
$conn=mysqli_connect($host,$user ,$pass ,$db );
if($conn){
echo"Connected";
}
else{
echo "Not Connected";
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: powderblue;}
#CONTENT{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: gray;
}

#btStop{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: red;
}

#container
{
text-align: center;
}

</style>
</head>
<body>
<form>
<div id="container">
 <button id="CONTENT">Forwards</button>
<div >
 <button id="CONTENT">Left</button>
   <button id="btStop">Stop</button>
 <button id="CONTENT">Right</button></div>
 <div >
 <button id="CONTENT">Backwords</button>
 </div>
 </div>

 </form>
</body>
</html>
<?php 
//insert
mysqli_close($conn)
?>
