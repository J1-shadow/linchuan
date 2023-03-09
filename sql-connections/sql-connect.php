<?php
//including the Mysql connect parameters.
$dbuser ='root';
$dbpass ='';
$dbname ="lingchuan_travel";
$host = 'localhost';
@$con = mysqli_connect($host,$dbuser,$dbpass);
mysqli_query($con, 'set names utf8');
// Check connection
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysqli_error();
}
    @mysqli_select_db($con,$dbname) or die ( "Unable to connect to the database: $dbname");
?>




 
