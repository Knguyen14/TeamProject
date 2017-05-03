<?php 
$connect = mysql_connect(“localhost”, “root”, “Theanswer14”);
if (!connect) { 
	die('Connection Failed: ' . mysql_error());{ 
	mysql_select_db(“project”, $connect); 

$C1 = $_POST['class1'];
$T1 = $_POST['time1'];
$C2 = $_POST['class2'];
$T2 = $_POST['time2'];
$C3 = $_POST['class3'];
$T3 = $_POST['time3'];
$C4 = $_POST['class4'];
$T4 = $_POST['time4'];
$C5 = $_POST['class5'];
$T5 = $_POST['time5'];
$C6 = $_POST['class6'];
$T6 = $_POST['time6'];
$C7 = $_POST['class7'];
$T7 = $_POST['time7'];

$user_info = “INSERT INTO classes (class1, time1 , class2 , time2 ,class3 , time3 , class4 , time4 , class5, time5,class6, time6,class7, time7) VALUES ('$C1', '$T1','$C2', '$T2','$C3', '$T3','$C4', '$T4','$C5', '$T5','$C6', '$T6','$C7', '$T7') WHERE id.users = id.classes”; 
if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); 
} echo “Your information was added to the database.”; mysql_close($connect);

 ?> 
