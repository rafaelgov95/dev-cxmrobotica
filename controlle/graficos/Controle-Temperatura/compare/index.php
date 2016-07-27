
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
//                 document.write(data[1].data[0]);
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
                        plotOptions: {
                            series: {
                                animation: {
                                    duration: 2000
                                }
                            }

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
                        },
                        yAxis: {
                            title: {
                                text: 'Temperatura (°C)  X  Quantidade Luz (%)'

                            }
                        }, xAxis: {
                            gridLineWidth: 1,
                            gridZIndex: 1,
                            lineColor: 'Red'


                        },
                        title: {
                            text: 'Gráfico de relação entre Temperatura e Lúmens (LDR). '
                        },
                        subtitle: {
                            text: 'Built chart in ...' // dummy text to reserve space for dynamic subtitle
                        },
                        series: [{
                                name: data[0].name,
                                data: data[0].data,
                                pointStart: data[0].data[0],
//                                pointInterval: data.pointInterval,
                                tooltip: {
//                                    valueDecimals: 1,
                                    valueSuffix: ' %'
                                }
                            }
                            ,
                            {name: data[1].name,
                                data: data[1].data,
                                pointStart: data[1].data[0],
//                                pointInterval: data[1].data[0],
                                tooltip: {
                                    valueDecimals: 1,
                                    valueSuffix: ' °C'
                                }},
                            {name: data[2].name,
                                data: data[2].data,
                                pointStart: data[2].data[0],
//                                pointInterval: data[1].data[0],
                                tooltip: {
                                    valueDecimals: 1,
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
