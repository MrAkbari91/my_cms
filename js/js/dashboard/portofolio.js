(function($) {
    "use strict"


 var dzChartlist = function(){
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	var screenWidth = $(window).width();

	var lineChart2 = function(){
		//dual line chart
		if(jQuery('#lineChart2').length > 0 ){
			const lineChart2 = document.getElementById("lineChart2").getContext('2d');
			//generate gradient
			const lineChart_3gradientStroke1 = lineChart2.createLinearGradient(500, 0, 100, 0);
			lineChart_3gradientStroke1.addColorStop(0, "rgba(54, 48, 98, 1)");
			lineChart_3gradientStroke1.addColorStop(1, "rgba(54, 48, 98, 1)");

			const lineChart_3gradientStroke2 = lineChart2.createLinearGradient(500, 0, 100, 0);
			lineChart_3gradientStroke2.addColorStop(0, "rgba(91, 218, 164, 1)");
			lineChart_3gradientStroke2.addColorStop(1, "rgba(91, 218, 164, 1)");

			
			lineChart2.height = 100;

			new Chart(lineChart2, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["2:00PM", "2:30PM", "3:00PM", "3:30PM", "4:00PM", "4:30PM", "5:00PM", "5:30PM"],
					datasets: [
						{
							label: "My First dataset",
							data: [18, 38, 38, 70, 75, 60, 75, 66],
							borderColor: lineChart_3gradientStroke1,
							borderWidth: "4",
							pointHoverRadius:10,
							backgroundColor: 'rgba(54, 48, 98, 0.1)', 
							pointBackgroundColor: 'rgba(54, 48, 98, 1)',
						}, {
							label: "My First dataset",
							data: [18, 20, 20, 30, 45, 40, 25, 37],
							borderColor: lineChart_3gradientStroke2,
							borderWidth: "4",
							backgroundColor: 'rgba(91, 218, 164, 0.1)', 
							pointHoverRadius:10,
							pointBorderWidth:5,
							pointBorderColor:'rgba(255, 255, 255, 1)',
							pointBackgroundColor: 'rgba(91, 218, 164, 1)'
						}
					]
				},
				options: {
					legend: false,
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},					
					scales: {
						yAxes: [{
							display: !1,
							ticks: {
								beginAtZero: true, 
								max: 100, 
								min: 0, 
								stepSize: 20, 
								padding: 10
							}
						}],
						xAxes: [{ 
							ticks: {
								padding: 5
							}
						}]
					},
					elements: {
						point: {
							radius: 0
						}
					}
				}
			});
		}
	}
	
	var pieChart = function(){
		 var options = {
          series: [34, 12, 41, 22, 15],
          chart: {
          type: 'donut',
		  width:200
        },
		dataLabels: {
          enabled: false
        },
		stroke: {
          width: 0,
        },
		colors:['#3C8AFF', '#ED3DD1', '#FFEE54', '#FF5166', '#2BC844'],
		legend: {
              position: 'bottom',
			  show:false
            },
        responsive: [{
          breakpoint: 480,
          options: {
           
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#pieChart"), options);
        chart.render();
    
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){			
				lineChart2();			
				pieChart();			
			},
			
			resize:function(){
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);