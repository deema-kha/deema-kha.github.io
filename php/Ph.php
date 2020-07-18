<?php
if (isset($_POST['S'])){
	$sql ="INSERT INTO button (id,stop,back,forward,right,left) VALUES(NULL,'S','','','','')";
	if($conn->query($sql) === TRUE){
echo 'S';
	}else{
		echo "Error:".$sql ."<br>".$conn->error;
	}
	elseif(isset($_POST['F'])){
	$sql ="INSERT INTO button (id,stop,back,forward,right,left) VALUES(NULL,'','','F','','')";
	if($conn->query($sql) === TRUE){
echo 'F';
	}else{
		echo "Error:".$sql ."<br>".$conn->error;
	}
	elseif(isset($_POST['R'])){
	$sql ="INSERT INTO button (id,stop,back,forward,right,left) VALUES(NULL,'','','','R','')";
	if($conn->query($sql) === TRUE){
echo 'R';
	}else{
		echo "Error:".$sql ."<br>".$conn->error;
	}
	elseif(isset($_POST['B'])){
	$sql ="INSERT INTO button (id,stop,back,forward,right,left) VALUES(NULL,'','B','','','')";
	if($conn->query($sql) === TRUE){
echo 'B';
	}else{
		echo "Error:".$sql ."<br>".$conn->error;
	}
	elseif(isset($_POST['L'])){
	$sql ="INSERT INTO button (id,stop,back,forward,right,left) VALUES(NULL,'','','','','L')";
	if($conn->query($sql) === TRUE){
echo 'L';
	}else{
		echo "Error:".$sql ."<br>".$conn->error;
	}
	
?>