<div class="tab-pane" id="get_csv">  
		<h3> balance </h3>
	
<?php 
	echo 1;
?>
	
<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'payments';
$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection) die("Can't connect to database");

$query_tipulim = "select  REPLACE(REPLACE(REPLACE(tipul_id,'\r',' '),'\n',' '),'\"','') as tipul_id, REPLACE(REPLACE(REPLACE(patient_id,'\r',' '),'\n',' '),'\"','') as patient_id, REPLACE(REPLACE(REPLACE(date1,'\r',' '),'\n',' '),'\"','') as date1, REPLACE(REPLACE(REPLACE(main_concern,'\r',' '),'\n',' '),'\"','') as main_concern, REPLACE(REPLACE(REPLACE(what_we_did,'\r',' '),'\n',' '),'\"','') as what_we_did, REPLACE(REPLACE(REPLACE(home_work,'\r',' '),'\n',' '),'\"','') as home_work, REPLACE(REPLACE(REPLACE(comments,'\r',' '),'\n',' '),'\"','') as comments, REPLACE(REPLACE(REPLACE(price,'\r',' '),'\n',' '),'\"','') as price, REPLACE(REPLACE(REPLACE(is_deleted,'\r',' '),'\n',' '),'\"','') as is_deleted  from tipulim into outfile '/var/www/html/csv/tipulim.csv' fields terminated by ',' escaped by '' OPTIONALLY ENCLOSED BY '\"' lines terminated by '\n' ;";
mysqli_query($connection, $query_tipulim );
print (1)
?>

<?php
ob_start();
// put some business here 
$file = "/var/www/html/csv/tipulim.csv";
print($file) ; 
if(file_exists($file))
{
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();

readfile($file);
exit;
}
?>
	
</div>  