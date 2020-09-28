<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Laravel 7 Highcharts</h1>
<div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var blogs =  <?php echo json_encode($blogs) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'New Blog Growth, 2020'
        },
        subtitle: {
            text: 'Source: realprogrammer.in'
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New blogs'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Blogs',
            data: blogs
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>