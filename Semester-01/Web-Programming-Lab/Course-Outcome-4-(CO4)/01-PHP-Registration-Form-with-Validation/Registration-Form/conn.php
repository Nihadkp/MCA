<?php

$servername ='localhost';
$username='root';
$password='';
$dbname="registration";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('Could not Connect MySQL:'.mysql_error());
}
else
{
echo "Database Connected";
}
?>