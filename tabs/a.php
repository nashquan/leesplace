<?php
$query_tipulim = "select  REPLACE(REPLACE(REPLACE(tipul_id,'\r',' '),'\n',' '),'\"','') as tipul_id, REPLACE(REPLACE(REPLACE(patient_id,'\r',' '),'\n',' '),'\"','') as patient_id, REPLACE(REPLACE(REPLACE(date1,'\r',' '),'\n',' '),'\"','') as date1, REPLACE(REPLACE(REPLACE(main_concern,'\r',' '),'\n',' '),'\"','') as main_concern, REPLACE(REPLACE(REPLACE(what_we_did,'\r',' '),'\n',' '),'\"','') as what_we_did, REPLACE(REPLACE(REPLACE(home_work,'\r',' '),'\n',' '),'\"','') as home_work, REPLACE(REPLACE(REPLACE(comments,'\r',' '),'\n',' '),'\"','') as comments, REPLACE(REPLACE(REPLACE(price,'\r',' '),'\n',' '),'\"','') as price, REPLACE(REPLACE(REPLACE(is_deleted,'\r',' '),'\n',' '),'\"','') as is_deleted  from tipulim into outfile '/var/www/html/csv/tipulim.csv' fields terminated by ',' escaped by '' OPTIONALLY ENCLOSED BY '\"' lines terminated by '\n' ;";

echo $query_tipulim
?>
