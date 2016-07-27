
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highstock Example</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">

        </style>
        <script type="text/javascript">
            $(function () {

                $.getJSON('data.php', function (data) {
//                    document.write(data[0].data);
                    // Create a timer
                    var start = +new Date();

                    // Create the chart
                    $('#container').highcharts('StockChart', {
                        chart: {
                            events: {
                                load: function () {
                                    if (!window.isComparing) {
                                        this.setTitle(null, {
                                            text: 'gráfico construído em  ' + (new Date() - start) + ' milisegundos.'
                                        });
                                    }
                                }
                            },
                            zoomType: 'x'
                        },
                        rangeSelector: {
                            buttons: [{
                                    type: 'day',
                                    count: 3,
                                    text: '3d'
                                }, {
                                    type: 'week',
                                    count: 1,
                                    text: '1w'
                                }, {
                                    type: 'month',
                                    count: 1,
                                    text: '1m'
                                }, {
                                    type: 'month',
                                    count: 6,
                                    text: '6m'
                                }, {
                                    type: 'year',
                                    count: 1,
                                    text: '1y'
                                }, {
                                    type: 'all',
                                    text: 'All'
                                }],
                            selected: 3
                        }, yxAxis: {
//                            type: 'datetime'
                        }, xAxis: {
                            type: 'datetime',
//                                         categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],

//                        gridLine:20,
                            gridLineWidth: 1,
                            gridZIndex: 1,
                            lineColor: 'Orange'
                            , DateTimeLabelFormats: {
                                second: '%Y-%m-%d<br/>%H:%M:%S',
                                minute: '%Y-%m-%d<br/>%H:%M',
                                hour: '%Y-%m-%d<br/>%H:%M',
                                day: '%Y<br/>%m-%d',
                                week: '%Y<br/>%m-%d',
                                month: '%Y-%m',
                                year: '%Y'
                            }
                        },
                        yAxis: {
//                                 type: 'datetime'
                            title: {
                                text: 'Lúmen (LDR) e Temperature (°C)'
                            },
                            lineWidth: 2
                        },
                        title: {
                            text: 'Gráfico de relação entre Temperatura e Lúmen (LDR). '
                        },
                        subtitle: {
                            text: '' // dummy text to reserve space for dynamic subtitle
                        },
                        plotOptions: {
                            series: {
                                animation: {
                                    duration: 2000,
                                    easing: 'easeOutBounce'
                                }
                                , dataLabels: {
//                                    enabled: true,
//                                    borderRadius: 1,
//                                    backgroundColor: 'rgba(252, 255, 197, 0.7)',
//                                    borderWidth: 0,
//                                    borderColor: false,
//                                    y: -1
                                }
                            }
                        },
//                         series: data
                        series: [{
                                name: data[0].name,
                                data: data[0].data,
////                                pointStart: data.pointStart,
////                                pointInterval: data.pointInterval,
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' %'
                                }
                            }
                            ,
                            {name: data[1].name,
                                data: data[1].data,
////                                pointStart: data.pointStart,
//                                pointInterval: data.pointInterval,
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' °C'
                                }}]

                    });


                });
            });
        </script>
    </head>
    <body onload="refres()">
        <script src="https://code.highcharts.com/stock/highstock.js"></script>
        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script type="text/javascript" src="https://www.highcharts.com/samples/data/usdeur.js"></script>

        <div id="container" style="height: 400px; min-width: 310px"></div>
    </body>
</html>
