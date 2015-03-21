<html>
<body>

<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'payments';

$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection)
    die("Can't connect to database");

mysqli_set_charset($connection, "utf8");

$id_res =  mysqli_query($connection, "SELECT patient_id, name from all_patients WHERE name = '{$_POST["name"]}'; ");
# $id_res =  mysqli_query($connection, "SELECT patient_id, name from all_patients WHERE name = 'liad1'; ");
$row = mysqli_fetch_row($id_res);
$id_value = $row[0];

// sending query
 $result = mysqli_query($connection,
    "INSERT INTO {$table} 
    ( patient_id, date1, amount, payment_type,
    kabala_num, comments, is_deleted )
    VALUES 
    ( '$id_value', '{$_POST["date1"]}', '{$_POST["amount"]}',
    '{$_POST["payment_type"]}','{$_POST["mispar_kabala"]}','{$_POST["comments"]}',
	'0' )") or die(mysqli_error($connection)); 

//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
?>

	
hi you!

</body>
</html>
