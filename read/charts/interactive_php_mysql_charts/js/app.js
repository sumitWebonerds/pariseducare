$(function() {
    $.ajax({

        url: 'http://localhost/ajax/read/charts/interactive_php_mysql_charts/chart_data.php',
        type: 'GET',
        success: function(data) {
            chartData = data;
            var chartProperties = {
                "caption": "No. Of Student Absent per day",
                "xAxisName": "Dates",
                "yAxisName": "No. of students",
                "rotatevalues": "1",
                "theme": "zune"
            };

            apiChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chart-container',
                width: '550',
                height: '350',
                dataFormat: 'json',
                dataSource: {
                    "chart": chartProperties,
                    "data": chartData
                }
            });
            apiChart.render();
        }
    });
});