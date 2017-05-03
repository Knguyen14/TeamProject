<?php $connect = mysql_connect(“localhost”, “root”, “Theanswer14”);
if (!connect) { 
	die('Connection Failed: ' . mysql_error());{ 
	mysql_select_db(“project”, $connect); 

$user_info = “INSERT INTO classes (class1, time1 , class2 , time2 ,class3 , time3 , class4 , time4 , class5, time5,class6, time6,class7, time7) VALUES ('$_POST[class1]', '$_POST[time1]','$_POST[class2]', '$_POST[time2]','$_POST[class3]', '$_POST[time3]','$_POST[class4]', '$_POST[time4]','$_POST[class5]', '$_POST[time5]','$_POST[class6]', '$_POST[time6]','$_POST[class7]', '$_POST[time7]') WHERE id.users = id.classes”; 
if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); 
} echo “Your information was added to the database.”; mysql_close($connect); ?> 