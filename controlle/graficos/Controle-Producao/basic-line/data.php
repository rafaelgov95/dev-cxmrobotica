<?php
include '../../../config/conn.php';

$sth = mysql_query("SELECT salsinha,cebolinha,rucula,alface,date,UNIX_TIMESTAMP(date)*1000 as datemiliseconds FROM verdura order by datemiliseconds");
$salsinha = array();
//$rows = 56909;
//$rows['verduras'] = '';

while($r = mysql_fetch_array($sth)) {
 $salsinha['data'][] = [$r['datemiliseconds'],$r['salsinha']];
$cebolinha['data'][] = [$r['datemiliseconds'],$r['cebolinha']];
 $rucula['data'][] = [$r['datemiliseconds'],$r['rucula']];
$alface['data'][] = [$r['datemiliseconds'],$r['alface']];
 
}
$result=array();
array_push($result, $salsinha);
array_push($result, $cebolinha);
array_push($result, $rucula);
array_push($result, $alface);
//array_push($result, $cebolinha);

print json_encode($result, JSON_NUMERIC_CHECK);


mysql_close($con);
?>