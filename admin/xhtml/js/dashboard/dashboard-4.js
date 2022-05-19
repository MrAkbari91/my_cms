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
	
	var widgetChart2 = function(){
		if(jQuery('#widgetChart2').length > 0 ){
			const widgetChart2 = document.getElementById("widgetChart2").getContext('2d');
			//generate gradient
			const widgetChart2gradientStroke = widgetChart2.createLinearGradient(1, 1 , 500, 1);
			widgetChart2gradientStroke.addColorStop(0, "rgba(54, 147, 255, 1)");
			widgetChart2gradientStroke.addColorStop(1, "rgba(200, 255, 255, 0.5)");

			new Chart(widgetChart2, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#3693FF',
						pointBorderColor: '#3693FF',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#3693FF',
						pointHoverBorderColor: '#3693FF',
						backgroundColor: widgetChart2gradientStroke,
						
						data: [10, 30, 20, 30, 20, 40, 30, 20, 35]
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
	
	var widgetChart3 = function(){
		if(jQuery('#widgetChart3').length > 0 ){
			const widgetChart3 = document.getElementById("widgetChart3").getContext('2d');
			//generate gradient
			const widgetChart3gradientStroke = widgetChart3.createLinearGradient(1, 1 , 500, 1);
			widgetChart3gradientStroke.addColorStop(0, "rgba(118, 121, 175, 1)");
			widgetChart3gradientStroke.addColorStop(1, "rgba(142, 145, 199, 0.5)");

			new Chart(widgetChart3, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#7679AF',
						pointBorderColor: '#7679AF',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#7679AF',
						pointHoverBorderColor: '#7679AF',
						backgroundColor: widgetChart3gradientStroke,
						
						data: [40, 20, 30, 20, 50, 20, 30, 20, 35]
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
	
	var widgetChart4 = function(){
		if(jQuery('#widgetChart4').length > 0 ){
			const widgetChart4 = document.getElementById("widgetChart4").getContext('2d');
			//generate gradient
			const widgetChart4gradientStroke = widgetChart4.createLinearGradient(1, 1 , 500, 1);
			widgetChart4gradientStroke.addColorStop(0, "rgba(172, 76, 188, 1)");
			widgetChart4gradientStroke.addColorStop(1, "rgba(224, 98, 245, 0.5)");

			new Chart(widgetChart4, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#AC4CBC',
						pointBorderColor: '#AC4CBC',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#AC4CBC',
						pointHoverBorderColor: '#AC4CBC',
						backgroundColor: widgetChart4gradientStroke,
						
						data: [10, 25, 20, 40, 30, 40, 30, 50, 20]
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
					}]
				}],
				chart: {
				type: 'rangeBar',
				height: 370,
				
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
			  width: 6,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
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
				 x: {
					format: 'dd/MM/yy HH:mm'
				  },
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
					}]
				}],
				chart: {
				type: 'rangeBar',
				height: 370,
				
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
			  width: 6,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
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
					}]
				}],
				chart: {
				type: 'rangeBar',
				height: 370,
				
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
			  width: 6,
			  colors: ['transparent']
			},
			grid: {
				borderColor: '#eee',
			},
			xaxis: {
				
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '13px',
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
	
	var lineChart = function(){
		var options = {
          series: [{
          name: 'series1',
          data: [30, 50, 40, 50, 50, 40, 30, 45, 55, 65, 50]
        }, {
          name: 'series2',
          data: [20, 40, 30, 40, 40, 30, 20, 35, 45, 55, 40]
        }],
          chart: {
          height: 360,
		  toolbar:{
			show:false
		  },
          type: 'area'
        },
		colors:['#FFAB2D','#AC4CBC'],
		legend:{
			show:false
		},
        dataLabels: {
          enabled: false
        },
        stroke: {
			width:4,
          curve: 'smooth'
        },
       xaxis: {
			 categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
			  labels: {
			   style: {
				  colors: '#787878',
				  fontSize: '14px',
				   fontFamily: 'Poppins',
				  fontWeight: 100,
				  
				},
			  },
		},
		yaxis: {
			show:false
		},
		fill:{
			opacity:0.2,
			type:'solid'
		},
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#lineChart"), options);
        chart.render();
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				widgetChart();				
				widgetChart2();				
				widgetChart3();				
				widgetChart4();				
				chartBarRunning();				
				chartBarRunning2();				
				chartBarRunning3();				
				lineChart();				
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

