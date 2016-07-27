<?php
$con = mysql_connect('localhost', 'root', '12345') or die('Error connecting to server');
mysql_select_db("Hidroponia", $con);
$SQL1 = "SELECT luzSensor,date FROM sensores";



$result1 = mysql_query($SQL1);
$data1 = array();
$data2 = array();
while ($row = mysql_fetch_array($result1)) {
    $data1[] = $row['date'];
    $data2[] = $row['luzSensor'];
}
?> 
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highstock Example</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">

        </style>
        <script type="text/javascript">
            $(document).ready(function () {


//                $.getJSON('data.php', function (data) {
// Create the chart
//                    document.write(data[0].name)
                $('#container').highcharts('StockChart', {
                    rangeSelector: {
                        selected: 1
                    },
                    title: {
                        text: 'AAPL Stock Price'
                    },
                    tooltip: {
                        valueDecimals: 10
                    }, xAxis: {
                        categories: ['<?php echo join("','", $data1) ?>']
                    },
                    series: [{
                            name: 'Data', 
                            data: [<?php echo join(',', $data2) ?>]
                           
                        }]
                });
            });



        </script>
    </head>
    <body onload="refres()">
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

        <div id="container" style="height: 400px; min-width: 310px"></div>
    </body>
</html>
