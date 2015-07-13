<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'leesela';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql1 = 'USE tbl';
$retval = mysql_query( $sql1, $conn );

$sql = 'SELECT * FROM list1';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['name']} <br> ".
         "EMP SALARY : {$row['date1']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";


mysql_close($conn);
?>


