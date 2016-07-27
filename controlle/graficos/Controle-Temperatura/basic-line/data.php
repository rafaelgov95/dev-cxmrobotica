<?php
$con = mysql_connect("localhost","root","12345");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("Hidroponia", $con);

$sth = mysql_query("SELECT luzSensor ,date FROM sensores");
$rows = array(array());
$rows['name'] = 'Luz';
while($r = mysql_fetch_array($sth)) {
//    $rows['data'][] = $r['date'];
    $rows['data'][] = $r['luzSensor'];
}

$sth = mysql_query("SELECT tempSensor ,date FROM sensores");
$rows1 = array();
$rows1['name'] = 'Temperatura';
while($rr = mysql_fetch_assoc($sth)) {
//    $rows1['data'][] = $rr['date'];
    $rows1['data'][] = $rr['tempSensor'];
}
$sth = mysql_query("SELECT tempA ,date FROM sensores");
$rows2 = array();
$rows2['name'] = 'Temperatura Ambiente';
while($rrr = mysql_fetch_assoc($sth)) {
//    $rows1['data'][] = $rrr['date'];
    $rows1['data'][] = $rrr['tempambi'];
}
$result = array();
array_push($result,$rows);
array_push($result,$rows1);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
