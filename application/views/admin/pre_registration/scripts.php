<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:16:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:33:03
 */
?>
<script type="text/javascript">
	$(function(){
	})

    //line
    var ctx = $('#myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2019-2020 1st', '2019-2020 2nd', '2020-2021 1st', '2020-2021 2nd', '2021-2022 1st', '2021-2022 2nd'],
            datasets: [{
                label: 'Registrations',
                data: [12, 19, 3, 5, 2, 30],
		        barPercentage: 0.5,
		        barThickness: 4,
		        maxBarThickness: 6,
		        minBarLength: 2,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
        	legend: {
	            display: true,
	            labels: {
	                fontColor: 'rgb(255, 99, 132)'
	            }
	        },
	        layout: {
	            padding: {
	                left: 25,
	                right: 30,
	                top: 0,
	                bottom: 0
	            }
	        },
        }
    });


</script>