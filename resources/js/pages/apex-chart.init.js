/*
Author       : Dreamguys
Template Name: SmartHR- Bootstrap Admin Template
Version      : 3.6
*/

   $(document).ready(function() {

   // Apex Chart
    if($('#radialBarChart').length > 0) {
        var options = {
            series: [70],
            chart: {
            height: 300,
            type: 'radialBar',
            dropShadow: {
                enabled: true,
                blur: 2,
                color: '#000',
                opacity: 0.25
            }
        },
        plotOptions: {
            radialBar: {
                hollow: {
                size: '60%',
                }
            },
        },
        fill: {
            opacity: 1.5,
            colors: ['#FF7849', '#FF7849'],
            type: 'gradient',
            gradient: {
                gradientToColors: ['#FF7849', '#FF7849'],
                shadeIntensity: 1,
                opacityFrom: 1,
                opacityTo: 2,
                stops: [0, 50, 100],
                inverseColors: false
            },
        },
        labels: ['Completed task'],
        };

        var chart = new ApexCharts(document.querySelector("#radialBarChart"), options);
        chart.render();
    }
        
});