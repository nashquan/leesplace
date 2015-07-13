<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png"  href="http://www.photosnewhd.com/media/images/picture.jpg">
  <link href="/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="/js/bootstrap-dialog.min.js"></script>
	<script src="/js/main.js"></script>
	
		
</head>
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

$names = array('name1','name2','name3','name4','name5','name6','name7') ;
$prices = array('price1','price2','price3','price4','price5','price6','price7') ;
$comments = array('comments1','comments2','comments3','comments4','comments5','comments6','comments7') ;

$counter = 0 ;
foreach(array(1,2,3,4,5,6,7) as $i ){
	$curname = "name".$i;
	$curprice = "price".$i;
	$curcomment = "comment".$i;

	if ( !empty($_POST[$curname]) ) {
	$counter++;
	$id_res =  mysqli_query($connection, "SELECT patient_id, name from all_patients WHERE name = '{$_POST[$curname]}'; ");
	$row = mysqli_fetch_row($id_res);
	$curid_value = $row[0];

	$query1 = "INSERT INTO {$table} 
    	( patient_id, date1, hour1, price, comments, is_deleted )
    	VALUES 
    	( '{$curid_value}', '{$_POST["date1"]}','{$_POST["hour1"]}','{$_POST[$curprice]}',
    	'{$_POST[$curcomment]}', '0' )";
	
		
	mysqli_query($connection, $query1); 
	echo "Hi ", $_POST[$curname] , "</br>";
	} else {
		echo $curname, " is empty </br>" ;
	}

	
};

header('Location: http://54.69.133.4/home.php?insert=group&value='.$counter);
# header('Location: http://54.69.133.4/home.php');
# header('Location: javascript://history.go(-1)');
?>

</body>
</html>
