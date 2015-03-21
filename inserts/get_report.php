<html>
<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
 
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.js"></script>
</head>
<body>

<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';
$database = 'heb';

//connecting to mysql
$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection) die("Can't connect to database");

mysqli_set_charset($connection, "utf8");

// #####################################################################
// #####################################################################
// #####################################################################

$result1 = mysqli_query($connection, "SELECT * FROM all_patients;" );
if ($result1->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $var1[]=$row;
    }
}
$fp1 = fopen('/var/www/html/tmp/patients.json', 'w');
fwrite($fp1, json_encode($var1, JSON_UNESCAPED_UNICODE));
fclose($fp1);

// #####################################################################
// #####################################################################
// #####################################################################

$result2 = mysqli_query($connection, "
SELECT tipulim.*, all_patients.name 
FROM tipulim 
LEFT JOIN all_patients 
ON tipulim.patient_id=all_patients.patient_id;" );

if ($result2->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $var2[]=$row;
	}
}
$fp2 = fopen('/var/www/html/tmp/tipulim.json', 'w');
fwrite($fp2, json_encode($var2, JSON_UNESCAPED_UNICODE));
fclose($fp2);
// #####################################################################
// #####################################################################
// #####################################################################
$result3 = mysqli_query($connection, "
SELECT payments.*, all_patients.name 
FROM payments 
LEFT JOIN all_patients
ON payments.patient_id=all_patients.patient_id ;" );

if ($result3->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result3)) {
        $var3[]=$row;
	}
}
$fp3 = fopen('/var/www/html/tmp/payments.json', 'w');
fwrite($fp3, json_encode($var3, JSON_UNESCAPED_UNICODE));
fclose($fp3);

// #####################################################################
// #####################################################################
// #####################################################################
// all_patients.phone_number, all_patients.email,
mysqli_query($connection, "
CREATE TEMPORARY TABLE prices AS (
SELECT all_patients.patient_id AS patient_id,
all_patients.name AS name,
sum(tipulim.price) AS price
FROM all_patients
LEFT JOIN tipulim
ON all_patients.patient_id=tipulim.patient_id
GROUP BY patient_id );");

mysqli_query($connection, "
CREATE TEMPORARY TABLE amounts AS (
SELECT all_patients.patient_id AS patient_id,
all_patients.name AS name,
sum(payments.amount) AS amount
FROM all_patients
LEFT JOIN payments
ON all_patients.patient_id=payments.patient_id
GROUP BY patient_id );");

$result4 = mysqli_query($connection, "
SELECT all_patients.patient_id AS patient_id, all_patients.name AS name, 
amounts.amount AS amount, prices.price AS price, amount-price AS balance
FROM all_patients
LEFT JOIN prices 
ON prices.patient_id=all_patients.patient_id
LEFT JOIN amounts 
ON amounts.patient_id=all_patients.patient_id ;" );


if ($result4->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result4)) {
        $var4[]=$row;
	}
}

$fp4 = fopen('/var/www/html/tmp/balance.json', 'w');
fwrite($fp4, json_encode($var4, JSON_UNESCAPED_UNICODE));
fclose($fp4);

// #####################################################################
// #####################################################################
// #####################################################################


// echo "<table data-url=\"http://wenzhixin.net.cn/p/bootstrap-table/docs/data1.json\" 
//     data-height=\"299\" data-show-refresh=\"true\" 
//     data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" 
//     data-select-item-name=\"toolbar1\"> " ;

// <th class="col-lg-3" data-field="name">Name</th>
//  data-height="299"
echo ' <h3> patients </h3>' ;
echo '<table class="table" data-toggle="table" data-height="299" data-search="true" data-cache="false" data-url="/tmp/patients.json">
    <thead>
    <tr>
	<th data-field="patient_id"> *ID* </th>
	<th data-field="name"> Name </th>
	<th data-field="phone_number"> Phone </th>
	<th data-field="email"> E-mail </th>
	<th data-field="comments"> Comment </th>
	<th data-field="is_deleted"> Deleted </th>
	<th data-field="year_of_birth"> Year Of Birth </th>
    </tr>
    </thead>
</table> ';
echo ' <h3> tipulim </h3>' ;
echo '<table class="table" data-toggle="table" data-height="299" data-search="true" data-cache="false" data-url="/tmp/tipulim.json">
    <thead>
    <tr>
	<th data-field="tipul_id"> *ID* </th>
	<th data-field="name"> Name </th>
	<th data-field="date1"> Date </th>
	<th data-field="price"> Price </th>
    </tr>
    </thead>
</table> ';
echo ' <h3> payments </h3>' ;
echo '<table class="table" data-toggle="table" data-height="299" data-search="true" data-cache="false" data-url="/tmp/payments.json">
    <thead>
    <tr>
	<th data-field="payment_id"> *ID* </th>
	<th data-field="name"> Name </th>
	<th data-field="date1"> Date </th>
	<th data-field="amount"> Amount </th>
    </tr>
    </thead>
</table> ';

echo ' <h3> balance </h3>' ;
echo '<table class="table" data-toggle="table" data-height="299" data-search="true" data-cache="false" data-url="/tmp/balance.json">
    <thead>
    <tr>
	<th data-field="name"> Name </th>
	<th data-field="patient_id"> patient_id </th>
	<th data-field="amount"> Amount </th>
	<th data-field="price"> Price </th>
	<th data-field="balance"> Balance </th>
	</tr>
    </thead>
</table> ';

/* 	<th data-field="phone_number"> Phone </th>
	<th data-field="email"> E-mail </th>
	<th data-field="comments"> Comment </th>
	<th data-field="is_deleted"> Deleted </th>
	<th data-field="year_of_birth"> Year Of Birth </th> */


?>

	
	
	
</body>
</html>
