jQuery(function($) {

	// #main-slider
	// Activates the Carousel
	$('.carousel').carousel({
	  interval: 5000
	})

	// Activates Tooltips for Social Links
	$('.tooltip-social').tooltip({
	  selector: "a[data-toggle=tooltip]"
	})

	// Portfolio
	$(window).load(function(){
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : 'li',
				layoutMode : 'fitRows'
			});
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});
	
	// Main Menu Active Items
	$(window).load(function(){
		
	    $(function(){
		
		  var url = window.location.pathname;  
		  var activePage = url.substring(1, url.length);
		  // confirm(activePage);
			
		  $('.nav li a').each(function(){  
		    var currentPage = $(this).attr('href');
			
		    if (activePage == currentPage) {
		      $(this).parent().addClass('active'); 
		    } else if (activePage == '') {
		    	$('.nav .nav-home').addClass('active'); 
		    }
		    
		  });
		  
		});

	}); 
	
	// Price Slider 
	$('#sl2').slider();

	// Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
	
	 
	/* Scroll to top*/
	$(document).ready(function(){
		$(function () {
			$.scrollUp({
		        scrollName: 'scrollUp', // Element ID
		        scrollDistance: 300, // Distance from top/bottom before showing element (px)
		        scrollFrom: 'top', // 'top' or 'bottom'
		        scrollSpeed: 300, // Speed back to top (ms)
		        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
		        animation: 'fade', // Fade, slide, none
		        animationSpeed: 200, // Animation in speed (ms)
		        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
						//scrollTarget: false, // Set a custom target element for scrolling to the top
		        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
		        scrollTitle: false, // Set a custom <a> title if required.
		        scrollImg: false, // Set true to use image
		        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		        zIndex: 2147483647 // Z-Index for the overlay
			});
		});
	});
	
});