<html>
<body>

<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'all_patients';

//connecting to mysql
$connection = mysql_connect($db_host, $db_user, $db_pwd);
if (!$connection)
    die("Can't connect to database");
mysql_set_charset("utf8",$connection);

// USE database $database
if (!mysql_select_db($database))
    die("Can't select database");


// sending query
$result = mysql_query("INSERT INTO {$table} (FirstName, LastName) VALUES ('{$_POST["name"]}', '{$_POST["dateinput"]}')");
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
?>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $result ;?>

</body>
</html>
