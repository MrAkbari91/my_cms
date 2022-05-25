(function($) {
   "use strict" 


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();

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
	
	var chartBarRunning1 = function(){
		
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

			var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning1"), chartBarRunningOptions);
			chartBarRunningObject.render();
			
	}
	var chartBarRunning2 = function(){
		
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

			var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning2"), chartBarRunningOptions);
			chartBarRunningObject.render();
			
	}
	var chartBarRunning3 = function(){
		
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

			var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning3"), chartBarRunningOptions);
			chartBarRunningObject.render();
			
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){			
				chartBarRunning();			
				chartBarRunning1();			
				chartBarRunning2();			
				chartBarRunning3();			
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