<html>
<body>

<!-- header("location:javascript://history.go(-1)"); -->
	
<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'groups';

//connecting to mysql
$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection)
    die("Can't connect to database");

mysqli_set_charset($connection, "utf8");

############# verify that the name does not exist!
 ;
$names = array('name1','name2','name3','name4','name5','name6','name7') ;
$prices = array('price1','price2','price3','price4','price5','price6','price7') ;
$comments = array('comments1','comments2','comments3','comments4','comments5','comments6','comments7') ;
foreach(array(1,2,3,4,5,6,7) as $i ){
	$curname = "name".$i;
	$curprice = "price".$i;
	$curcomment = "comment".$i;
	
	if ( !empty($_POST[$curname]) ) {	
	$id_res =  mysqli_query($connection, "SELECT patient_id, name from all_patients WHERE name = '{$_POST[$curname]}'; ");
	$row = mysqli_fetch_row($id_res);
	$curid_value = $row[0];

	$query1 = "INSERT INTO {$table} 
    	( patient_id, date1, hour1, price, comments, is_deleted )
    	VALUES 
    	( '{$curid_value}', '{$_POST["date1"]}','{$_POST["hour1"]}','{$_POST[$curprice]}',
    	'{$_POST[$curcomment]}', '0' )";
	echo $query1 , "</br>";
		
	mysqli_query($connection, $query1); 
	echo "Hi ", $_POST[$curname] , "</br>";
	} else {
		echo $curname, " is empty </br>" ;
	}

}
?>

</body>
</html>
