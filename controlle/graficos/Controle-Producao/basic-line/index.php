<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highstock Example</title>
        <script type="text/javascript" language="javascript" src="../../../../style/js/ajaxpost.js"></script>
        <script src="../../../../style/js/jquery-1.3.2.min.js" type="text/javascript" language="javascript"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
            ${demo.css}
        </style>
        <script type="text/javascript">

            $(function () {
                $.getJSON('data.php', function (data) {
//        document.write(data[2].data);           
                    $('#container').highcharts({
                        xAxis: {
//                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            type: 'datetime',
                            dateTimeLabelFormats: {
                                second: '%Y-%m-%d<br/>%H:%M:%S',
                                minute: '%Y-%m-%d<br/>%H:%M',
                                hour: '%Y-%m-%d<br/>%H:%M',
                                day: '%Y<br/>%m-%d',
                                week: '%Y<br/>%m-%d',
                                month: '%Y-%m',
                                year: '%Y'
                            }
                        },
                        series: [{
                                name: "salsinha",
                                data: data[0].data,
                                pointStart: data[1].data[0],
//                                pointInterval: data.pointInterval,
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' UND'
                                }
                            }
                            ,
                            {
                                name: "Cebolinha",
                                data: data[1].data,
                                pointStart: data[1].data[0],
//                                pointInterval: data[1].data[0],
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' UND'
                                }
                            }
                            ,
                            {
                                name: "Rucula",
                                data: data[2].data,
                                pointStart: data[2].data[0],
//                                pointInterval: data[1].data[0],
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' UND'
                                }
                            }
                            ,
                            {
                                name: "alface",
                                data: data[3].data,
                                pointStart: data[3].data[0],
//                                pointInterval: data[1].data[0],
                                tooltip: {
                                    valueDecimals: 1,
                                    valueSuffix: ' UND'

                                }}]

                    });
                });
            });






        </script>
    </head>
    <body>
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

        <div id="container" style="height: 400px; min-width: 310px"></div> <div></div>

        <form action="#" method="post">
            <label>Cebolinha: <input type="text" name="cebolinha" id="cebolinha" /></label>
            <label>Salsinha: <input type="text" name="salsinha" id="salsinha" /></label>
            <label>Rucula: <input type="text" name="rucula" id="rucula" /></label>
            <label>Alface: <input type="text" name="alface" id="alface" /></label>
            <input type="button" value="Enviar" id="enviar" />
        </form>
        <div id="resposta"></div>

    </body>
</html>
