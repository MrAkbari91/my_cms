
(function($) {
    "use strict" 


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
		
	var widgetChart = function(){
		if(jQuery('#widgetChart').length > 0 ){
			const widgetChart = document.getElementById("widgetChart").getContext('2d');
			//generate gradient
			const widgetChartgradientStroke = widgetChart.createLinearGradient(1, 1 , 500, 1);
			widgetChartgradientStroke.addColorStop(0, "rgba(255, 171, 45, 1)");
			widgetChartgradientStroke.addColorStop(1, "rgba(255, 247, 45, 0.5)");

			new Chart(widgetChart, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#FFAB2D',
						pointBorderColor: '#FFAB2D',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#FFAB2D',
						pointHoverBorderColor: '#FFAB2D',
						backgroundColor: widgetChartgradientStroke,
						
						data: [10, 30, 20, 40, 30, 40, 30, 50, 35]
					}]
				},
				options: {
					title: {
						display: !1
					},
					tooltips: {
						intersect: !1,
						mode: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10
					},
					
					legend: {
						display: !1
					},
					responsive: !0,
					maintainAspectRatio: !1,
					hover: {
						mode: "index"
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Month"
							}
						}],
						yAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Value"
							},
							ticks: {
								beginAtZero: !0
							}
						}]
					},
					elements: {
						point: {
							radius: 0,
							borderWidth: 0
						}
					},
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 5,
							bottom: 0
						}
					}
				}
			});

		}
	}
	
	var widgetChart1 = function(){
		var options = {
          series: [{
		  data: [
            [1327359600000,31.95],
            [1327532400000,32],
            [1327878000000,33.00],
            [1328050800000,32.50],
            [1328223600000,31.85],
            [1328569200000,32.28],
            [1328742000000,32.65],
            [1329087600000,32.35],
            [1329260400000,32.46],
            [1329433200000,32.75],
            [1329865200000,32.33],
            [1330038000000,33.41],
            [1330383600000,33.27],
            [1330556400000,33.10],
            [1330902000000,33.22],
            [1331074800000,32.41],
            [1331247600000,33.64],
            [1331593200000,34.22],
            [1331766000000,34.17],
            [1332111600000,34.51],
            [1332284400000,33.56],
            [1332457200000,33.81],
            [1332799200000,34.63],
            [1332972000000,34.48],
            [1333317600000,34.70],
            [1333490400000,33.46],
            [1333922400000,33.22],
            [1334095200000,33.01],
            [1334268000000,33.18],
            [1334613600000,33.84],
            [1334786400000,32.91],
            [1335132000000,32.62],
            [1335304800000,33.13],
            [1335477600000,33.58],
            [1335823200000,33.77],
            [1335996000000,33.32],
            [1336082400000,32.61],
            [1336428000000,32.67],
            [1336600800000,31.92],
            [1336946400000,32.23],
            [1337119200000,32.36],
          ]
          
        }],
          chart: {
          id: 'area-datetime',
          type: 'area',
          height: 150,
		  width: '100%',
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		  toolbar: {
				show: false
			},
        },
     colors:['#AC4CBC', '#AC4CBC', '#AC4CBC'],
        dataLabels: {
          enabled: false
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
			show: false,
			type: 'datetime',
			 labels: {
			  format: 'MMM',
			},
			axisBorder: {
				  show: false,
				},
        },
		
        yaxis: {
				show: false
			},
			grid: {
				show: false,
			},	
		responsive: [{
          breakpoint: 1024,
          options: {
			   chart: {
				width: '100%',
			   }
				
		  }
        }],	
        };
		
		
		
        var chart = new ApexCharts(document.querySelector("#widget-chart1"), options);
        chart.render();
	}
	
	var widgetChart2 = function(){
		var options = {
          series: [{
		  data: [
            [1327359600000,31.95],
            [1327532400000,32],
            [1327878000000,33.00],
            [1328050800000,32.50],
            [1328223600000,31.85],
            [1328569200000,32.28],
            [1328742000000,32.65],
            [1329087600000,32.35],
            [1329260400000,32.46],
            [1329433200000,32.75],
            [1329865200000,32.33],
            [1330038000000,33.41],
            [1330383600000,33.27],
            [1330556400000,33.10],
            [1330902000000,33.22],
            [1331074800000,32.41],
            [1331247600000,33.64],
            [1331593200000,34.22],
            [1331766000000,34.17],
            [1332111600000,34.51],
            [1332284400000,33.56],
            [1332457200000,33.81],
            [1332799200000,34.63],
            [1332972000000,34.48],
            [1333317600000,34.70],
            [1333490400000,33.46],
            [1333922400000,33.22],
            [1334095200000,33.01],
            [1334268000000,33.18],
            [1334613600000,33.84],
            [1334786400000,32.91],
            [1335132000000,32.62],
            [1335304800000,33.13],
            [1335477600000,33.58],
            [1335823200000,33.77],
            [1335996000000,33.32],
            [1336082400000,32.61],
            [1336428000000,32.67],
            [1336600800000,31.92],
            [1336946400000,32.23],
            [1337119200000,32.36],
          ]
          
        }],
          chart: {
          id: 'area-datetime',
          type: 'area',
          height: 150,
		  width: '100%',
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		  toolbar: {
				show: false
			},
        },
     colors:['#FFAB2D', '#FFAB2D', '#FFAB2D'],
        dataLabels: {
          enabled: false
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
			show: false,
			type: 'datetime',
			 labels: {
			  format: 'MMM',
			},
			axisBorder: {
				  show: false,
				},
        },
		
        yaxis: {
				show: false
			},
			grid: {
				show: false,
			},	
		responsive: [{
          breakpoint: 1024,
          options: {
			   chart: {
				width: '100%',
			   }
				
		  }
        }],	
        };
		
		
		
        var chart = new ApexCharts(document.querySelector("#widget-chart2"), options);
        chart.render();
	}
	var widgetChart3 = function(){
		var options = {
          series: [{
		  data: [
            [1327359600000,31.95],
            [1327532400000,32],
            [1327878000000,33.00],
            [1328050800000,32.50],
            [1328223600000,31.85],
            [1328569200000,32.28],
            [1328742000000,32.65],
            [1329087600000,32.35],
            [1329260400000,32.46],
            [1329433200000,32.75],
            [1329865200000,32.33],
            [1330038000000,33.41],
            [1330383600000,33.27],
            [1330556400000,33.10],
            [1330902000000,33.22],
            [1331074800000,32.41],
            [1331247600000,33.64],
            [1331593200000,34.22],
            [1331766000000,34.17],
            [1332111600000,34.51],
            [1332284400000,33.56],
            [1332457200000,33.81],
            [1332799200000,34.63],
            [1332972000000,34.48],
            [1333317600000,34.70],
            [1333490400000,33.46],
            [1333922400000,33.22],
            [1334095200000,33.01],
            [1334268000000,33.18],
            [1334613600000,33.84],
            [1334786400000,32.91],
            [1335132000000,32.62],
            [1335304800000,33.13],
            [1335477600000,33.58],
            [1335823200000,33.77],
            [1335996000000,33.32],
            [1336082400000,32.61],
            [1336428000000,32.67],
            [1336600800000,31.92],
            [1336946400000,32.23],
            [1337119200000,32.36],
          ]
          
        }],
          chart: {
          id: 'area-datetime',
          type: 'area',
          height: 150,
		  width: '100%',
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		  toolbar: {
				show: false
			},
        },
     colors:['#3693FF', '#E91E63', '#9C27B0'],
        dataLabels: {
          enabled: false
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
			show: false,
			type: 'datetime',
			 labels: {
			  format: 'MMM',
			},
			axisBorder: {
				  show: false,
				},
        },
		
        yaxis: {
				show: false
			},
			grid: {
				show: false,
			},	
		responsive: [{
          breakpoint: 1024,
          options: {
			   chart: {
				width: '100%',
			   }
				
		  }
        }],	
        };
		
		
		
        var chart = new ApexCharts(document.querySelector("#widget-chart3"), options);
        chart.render();
	}
	
	var chartBarRunning = function(){
		
		var chartBarRunningOptions = {
				series: [{
					name: 'Buy',
					data: [{
					  x: '2:00PM',
					  y: [9200.00, 9600.00]
					}, {
					  x: '2:30PM',
					  y: [9300.00, 9600.00]
					}, {
					  x: '3:00PM',
					  y: [9150.00, 9500.00]
					}, {
					  x: '3:30PM',
					  y: [9300.00, 9700.00]
					}, {
					  x: '4:00PM',
					  y: [9200.00, 9600.00]
					}, {
					  x: '4:30PM',
					  y: [9400.00, 9700.00]
					}, {
					  x: '5:00PM',
					  y: [9400.00, 9600.00]
					}, {
					  x: '5:30PM',
					  y: [9300.00, 9600.00]
					}, {
					  x: '6:00PM',
					  y: [9300.00, 9500.00]
					}, {
					  x: '6:30PM',
					  y: [9200.00, 9500.00]
					}, {
					  x: '7:00PM',
					  y: [9450.00, 9650.00]
					}, {
					  x: '7:30PM',
					  y: [9400.00, 9700.00]
					}, {
					  x: '8:00PM',
					  y: [9300.00, 9700.00]
					}, {
					  x: '5:00PM',
					  y: [9400.00, 9600.00]
					}, {
					  x: '5:30PM',
					  y: [9300.00, 9600.00]
					}, {
					  x: '6:00PM',
					  y: [9300.00, 9500.00]
					}, {
					  x: '6:30PM',
					  y: [9200.00, 9500.00]
					}, {
					  x: '7:00PM',
					  y: [9450.00, 9650.00]
					}, {
					  x: '7:30PM',
					  y: [9400.00, 9700.00]
					}, {
					  x: '8:00PM',
					  y: [9300.00, 9700.00]
					}, {
					  x: '6:30PM',
					  y: [9200.00, 9500.00]
					}, {
					  x: '8:00PM',
					  y: [9300.00, 9700.00]
					}, {
					  x: '5:00PM',
					  y: [9400.00, 9600.00]
					}]
				}, {
					name: 'Sell',
					data: [{
					  x: '2:00PM',
					  y: [9370.00, 9550.00]
					}, {
					  x: '2:30PM',
					  y: [9350.00, 9700.50]
					}, {
					  x: '3:00PM',
					  y: [9275.00, 9482.00]
					}, {
					  x: '3:30PM',
					  y: [9200.00, 9600.00]
					}, {
					  x: '4:00PM',
					  y: [9250.00, 9500.00]
					}, {
					  x: '4:30PM',
					  y: [9445.00, 9523.00]
					}, {
					  x: '5:00PM',
					  y: [9440.00, 9667.00]
					}, {
					  x: '5:30PM',
					  y: [9300.00, 9600.00]
					}, {
					  x: '6:00PM',
					  y: [9445.00, 9648.00]
					}, {
					  x: '6:30PM',
					  y: [9240.00, 9700.00]
					}, {
					  x: '7:00PM',
					  y: [9130.00, 9550.00]
					}, {
					  x: '7:30PM',
					  y: [9340.00, 9440.00]
					}, {
					  x: '8:00PM',
					  y: [9560.00, 9740.00]
					}, {
					  x: '5:00PM',
					  y: [9440.00, 9667.00]
					}, {
					  x: '5:30PM',
					  y: [9300.00, 9600.00]
					}, {
					  x: '6:00PM',
					  y: [9445.00, 9648.00]
					}, {
					  x: '6:30PM',
					  y: [9240.00, 9700.00]
					}, {
					  x: '7:00PM',
					  y: [9130.00, 9550.00]
					}, {
					  x: '7:30PM',
					  y: [9340.00, 9440.00]
					}, {
					  x: '8:00PM',
					  y: [9560.00, 9740.00]
					}, {
					  x: '8:00PM',
					  y: [9560.00, 9740.00]
					}, {
					  x: '7:00PM',
					  y: [9130.00, 9550.00]
					}, {
					  x: '7:30PM',
					  y: [9340.00, 9440.00]
					}]
				}],
				chart: {
				type: 'rangeBar',
				height: 300,
				
				toolbar: {
					show: false,
				},
				
			},
			plotOptions: {
			  bar: {
				horizontal: false,
				columnWidth: '55%',
				endingShape: "rounded",
				startingShape: "rounded",
				
			  },
			},
			colors:['#61C277', '#FF3E3E'],
			dataLabels: {
			  enabled: false,
			},
			markers: {
				shape: "circle",
			},
			legend: {
				show: false,
				fontSize: '12px',
				labels: {
					colors: '#000000',
					
					},
				markers: {
				width: 18,
				height: 18,
				strokeWidth: 0,
				strokeColor: '#fff',
				fillColors: undefined,
				radius: 12,	
				}
			},
			stroke: {
			  show: true,
			  width: 4,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '12px',
				  fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
				},
			  },
			  crosshairs: {
			  show: false,
			  }
			},
			yaxis: {
				opposite: true,
				labels: {
					offsetX:0,
				   style: {
					  colors: '#787878',
					  fontSize: '12px',
					   fontFamily: 'poppins',
					  fontWeight: 100,
					  cssClass: 'apexcharts-xaxis-label',
				  },
			  },
			},
			fill: {
			  opacity: 1,
			  colors:['#61C277', '#FF3E3E'],
			},
			tooltip: {
			  y: {
				formatter: function (val) {
				  return "$ " + val + " thousands"
				}
			  }
			},
			 responsive: [{
				breakpoint: 575,
				options: {
					plotOptions: {
					  bar: {
						columnWidth: '40%',
						
					  },
					},
					chart:{
						height:250,
					},
					xaxis: {
				
					  labels: {
					   style: {
						  fontSize: '10px',
						},
					  },
					},
				}
			 }]
			};

			var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning"), chartBarRunningOptions);
			chartBarRunningObject.render();
			
	}
	
	var handleWebpicker = function(){
		$('#crypto-webticker').webTicker({
			height:'auto', 
			duplicate:true, 
			startEmpty:false, 
			rssfrequency:4
		});
	}
	var handleDatePicker = function(){
		$('.input-daterange-timepicker').daterangepicker({
			timePicker: true,
			format: 'MM/DD/YYYY h:mm A',
			timePickerIncrement: 30,
			timePicker12Hour: true,
			timePickerSeconds: false,
			buttonClasses: ['btn', 'btn-sm'],
			applyClass: 'btn-danger',
			cancelClass: 'btn-inverse'
		});	
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				widgetChart();						
				widgetChart1();						
				widgetChart2();						
				widgetChart3();						
				chartBarRunning();						
				handleWebpicker();						
				handleDatePicker();						
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
