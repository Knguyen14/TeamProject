<?php 
$connect = mysql_connect(“localhost”, “root”, “Theanswer14”);
if (!connect) { 
	die('Connection Failed: ' . mysql_error());{ 
	mysql_select_db(“project”, $connect); 

$C1 = $_POST['class1'];
$T1 = $_POST['start_time1'];
$E1 = $_POST['end_time1'];
$C2 = $_POST['class2'];
$T2 = $_POST['start_time2'];
$E2 = $_POST['end_time2'];
$C3 = $_POST['class3'];
$T3 = $_POST['start_time3'];
$E3 = $_POST['end_time3'];
$C4 = $_POST['class4'];
$T4 = $_POST['start_time4'];
$E4 = $_POST['end_time4'];
$C5 = $_POST['class5'];
$T5 = $_POST['start_time5'];
$E5 = $_POST['end_time5'];

$user_info = “INSERT INTO classes (class1, start_time1 , end_time1,  class2 , start_time2 , end_time2, class3 , start_time3 , end_time3, class4 , start_time4 , end_time4 , class5, start_time5, end_time5,) VALUES ('$C1', '$T1', '$E1', '$C2', '$T2', '$E2' ,'$C3', '$T3' ,'$E3' , '$C4', '$T4','$E4', '$C5', '$T5', '$E5') WHERE id.users = id.classes”; 
if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); 
} echo “Your information was added to the database.”; mysql_close($connect);

 ?> 
