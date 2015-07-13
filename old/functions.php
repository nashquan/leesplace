<?php
  function connect_sql($name, $string){ //function parameters, two variables.
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'leesela';

$database = 'tbl';
$table = 'list1';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
}

/* sending query
$result = mysql_query("SELECT * FROM {$table} WHERE name = '{$name}'");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);
return $string;  //returns the second argument passed into the function
  }
*/
?>
