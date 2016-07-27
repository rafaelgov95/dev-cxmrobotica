<?php
include '../../../config/conn.php';

$sth = mysql_query("SELECT date, luzSensor,UNIX_TIMESTAMP(date)*1000 as datemiliseconds FROM sensores order by datemiliseconds");
$rows = array();
//$rows = 56909;
$rows['name'] = 'Quantidade de Luz';
while($r = mysql_fetch_array($sth)) {
 $rows['data'][] = [$r['datemiliseconds']-14400000, $r['luzSensor']];
}

$sth = mysql_query("SELECT date,tempSensor ,UNIX_TIMESTAMP(date)*1000 as datemiliseconds FROM sensores order by datemiliseconds");
$rows1 = array();
$rows1['name'] = 'Temperatura Água';
while($rr = mysql_fetch_assoc($sth)) {
    $rows1['data'][] = [date($rr['datemiliseconds']-14400000), $rr['tempSensor']];
}
$sth = mysql_query("SELECT date,tempambi ,UNIX_TIMESTAMP(date)*1000 as datemiliseconds FROM sensores order by datemiliseconds");
$rows2 = array();
$rows2['name'] = 'Temperatura Ambiente';
while($rrr = mysql_fetch_assoc($sth)) {
    $rows2['data'][] = [date($rrr['datemiliseconds']-14400000), $rrr['tempambi']];
}



$result = array();


array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>