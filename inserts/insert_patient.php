<html>
<body>

header("location:javascript://history.go(-1)");
	
<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'all_patients';

//connecting to mysql
$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection)
    die("Can't connect to database");

mysqli_set_charset($connection, "utf8");

############# verify that the name does not exist!

// sending query
$result = mysqli_query($connection,
    "INSERT INTO {$table} 
    ( name, year_of_birth, gender, phone_number,
    email, address, how_arrived, comments, is_deleted )
    VALUES 
    ( '{$_POST["name"]}', '{$_POST["year_of_birth"]}', '{$_POST["gender"]}',
    '{$_POST["phone_number"]}','{$_POST["email"]}','{$_POST["address"]}',
    '{$_POST["how_arrived"]}', '{$_POST["comments"]}' , '0' )") or die(mysqli_error($connection)); 

//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
?>

Welcome <?php echo $_POST["name"]; ?><br>
<?php $_POST = array() ?>


</body>
</html>
