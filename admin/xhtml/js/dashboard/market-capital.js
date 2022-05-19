(function($) {
   "use strict"


 var dzChartlist = function(){
	var screenWidth = $(window).width();

	var handlePietyBar = function(){
		if(jQuery('.bar').length > 0 ){
			$(".bar").peity("bar", {
				fill: ["#363062"],  
				width: "200",
				height: "70",
				 padding: 0.35,
			});
		}
	}
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){			
				handlePietyBar();			
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