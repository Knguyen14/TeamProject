<?php 
$connect = mysql_connect(“localhost”, “root”, “Theanswer14”);
if (!connect) { 
	die('Connection Failed: ' . mysql_error());{ 
	mysql_select_db(“project”, $connect); 

$C1 = $_POST['class1'];
$T1 = 's_hour1':'s_minute1' ['s_timeperiod1'];
$E1 = 'e_hour1':'e_minute1' ['e_timeperiod1'];
$C2 = $_POST['class2'];
$T2 = 's_hour2':'s_minute2' ['s_timeperiod2'];
$E2 = 'e_hour2':'e_minute2' ['e_timeperiod2'];
$C3 = $_POST['class3'];
$T3 = 's_hour3':'s_minute3' ['s_timeperiod3'];
$E3 = 'e_hour3':'e_minute3' ['e_timeperiod3'];
$C4 = $_POST['class4'];
$T4 = 's_hour4':'s_minute4' ['s_timeperiod4'];
$E4 = 'e_hour4':'e_minute4' ['e_timeperiod4'];
$C5 = $_POST['class5'];
$T5 = 's_hour5':'s_minute5' ['s_timeperiod5'];
$E5 = 'e_hour5':'e_minutes' ['e_timeperiod5'];

<html>
<body>
echo $C1,$T1,E1,$C2,$T2,$E2,$C3,$T3,$E3,$C4,$T4,$E4,$C5,$T5,$E5;

</body>
</html>
//$user_info = “INSERT INTO classes (class1, start_time1 , end_time1,  class2 , /start_time2 , end_time2, class3 , start_time3 , end_time3, class4 , start_time4 , end_time4 , class5, start_time5, end_time5,) VALUES ('$C1', '$T1', '$E1', '$C2', '$T2', '$E2' ,'$C3', '$T3' ,'$E3' , '$C4', '$T4','$E4', '$C5', '$T5', '$E5') WHERE id.users = id.classes”; 
//if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); 
//} echo “Your information was added to the database.”; mysql_close($connect);

 ?> 
