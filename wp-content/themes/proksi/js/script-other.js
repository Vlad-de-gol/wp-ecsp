
		$(document).ready(function(){
		    $("#startMenu").click(function(){
		        $("#menu-center-menu").toggle();
		    });
		});
		$(document).ready(function(){
		    $("#startMenu-plus").click(function(){
		        $("#menu-center-menu-1").toggle();
		    });
		});
		
		
		$(document).ready(function(){			
		    $("#startBasket").click(function(){
		        $("#blockBasket").show();
		    });
			$(".wrap-header").click(function(){
		        $("#blockBasket").hide();
		    });		
			$("section").click(function(){
		        $("#blockBasket").hide();
		    });	
			$("footer").click(function(){
		        $("#blockBasket").hide();
		    });				
			
		});
		
		
		$(document).ready(function(){
		    $("#startBasket-plus").click(function(){
		        $("#blockBasket-plus").show();
		    });
			$(".wrap-header").click(function(){
		        $("#blockBasket-plus").hide();
		    });		
			$("section").click(function(){
		        $("#blockBasket-plus").hide();
		    });	
			$("footer").click(function(){
		        $("#blockBasket-plus").hide();
		    });		
			
		});
		
		
		
		$(document).ready(function(){
		    $("#startAdminka").click(function(){
		        $("#panelAadminka").show();
		    });
			$(".wrap-header").click(function(){
		        $("#panelAadminka").hide();
		    });		
			$("section").click(function(){
		        $("#panelAadminka").hide();
		    });	
			$("footer").click(function(){
		        $("#panelAadminka").hide();
		    });	
		});
		
		$(document).ready(function(){		    
			$("#startAdminka").click(function(){		       
				$("#blockBasket-plus").hide();
				$("#blockBasket").hide();
		    });	
			 $("#startBasket-plus").click(function(){
		        $("#panelAadminka").hide();
		    });
			$("#startBasket").click(function(){
		        $("#panelAadminka").hide();
		    });
			
		});
		
	
			
	
		var clock;
		
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock.setTime(6329600);//220880
		    clock.setCountdown(true);
		    clock.start();

		});
		
		
jQuery( document ).ready(function() {
	jQuery('#scrollup').mouseover( function(){
		jQuery( this ).animate({opacity: 1},100);
	}).mouseout( function(){
		jQuery( this ).animate({opacity: 0.5},100);
	}).click( function(){
		$('body,html').animate({ scrollTop: 0 }, 800);
		return false;
	});

	jQuery(window).scroll(function(){
		if ( jQuery(document).scrollTop() > 0 ) {
			jQuery('#scrollup').fadeIn(1000);
		} else {
			jQuery('#scrollup').fadeOut(1000);
		}
	});
});		
	

