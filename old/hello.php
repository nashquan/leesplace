<?php
header('Content-Type: text/html; charset=utf-8'); 
?>

<html>
<head>
<title> Table Viewer</title>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'heb';
$table = 'all_patients';

$connection = mysqli_connect($db_host, $db_user, $db_pwd, $database);
if (!$connection)
    die("Can't connect to database");

mysqli_set_charset($connection, "utf8");
// sending query
//$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
//mysql_query ( "set character_set_client='utf8'" );
//mysql_query ( "set character_set_results='utf8'" );
//mysql_query ( "set collation_server='utf8_general_ci'" );

$result = mysqli_query($connection, "SELECT * FROM {$table}");
if (!$result) {    die("Query to show fields from table failed"); }

$fields_num = mysqli_num_fields($result);

echo "<table class='table1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++){
    $field = mysqli_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";

// printing table rows
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";
// $row is array... foreach( .. ) puts every element of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";
    echo "</tr>\n";
}
echo "</table>";

// $result = mysql_query("SELECT * FROM {$table}"); 
// $rows = array();
// while($row = mysql_fetch_row($result))
// {
//   $rows[] = $row[2];
//   echo 111;
//   echo $row;
// }
// echo "<p>";
// echo json_encode($rows, JSON_UNESCAPED_UNICODE); # The second argument is for showing hebrew!
// echo "</p>";


mysql_free_result($result);

?>
</body></html>

