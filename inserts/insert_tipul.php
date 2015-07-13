<html>
<body>

<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'tipulim';

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
    ( patient_id, date1, main_concern, what_we_did,
    home_work, comments, price, is_deleted )
    VALUES 
    ( '$id_value', '{$_POST["date1"]}', '{$_POST["main_concern"]}',
    '{$_POST["what_we_did"]}','{$_POST["home_work"]}','{$_POST["comments"]}',
    '{$_POST["price"]}','0' )") or die(mysqli_error($connection)); 

//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
header('Location: http://54.69.133.4/home.php?insert=tipul&value='.$_POST["name"]);
?>



</body>
</html>
