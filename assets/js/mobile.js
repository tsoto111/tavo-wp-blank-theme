(function($){
	
	
	$(document).ready(function(){
		ResponsiveViewports();
		//Custom Scripts...
		$size = $('body').attr('size');
		WindowSizeConditional($size);
		$(window).resize(function(){
			if($('body').attr('size') != $size){
				$size = $('body').attr('size');
				WindowSizeConditional($size);
			}
		});
		
		//Your code down here...
		
	});
	
	function WindowSizeConditional(size){
		switch(size){
			case 'mobile-styles':
				console.log('mobile-styles');
			break;
			
			case 'tablet-styles':				
				console.log('tablet-styles');
			break;
			
			case 'full-screen':
				console.log('full-screen');
			break;
		}
	}
	
	function ResponsiveViewports(){
		var body_classes = $('body').attr('class');
	
		function checkWidth(){
			var windowSize = $(window).width();
			if(windowSize > 1024){
			
				//Change meta tag to full viewport
				$('head').find('meta[name=viewport]').attr(
					'content',
					'width=1100, Initial-scale=1.0'
				);
			
				//Add Full Class
				$('body').attr('size','full-screen');
			
			} else if (windowSize < 1024 && windowSize > 720) {
				
				//Change meta tag to Tablet viewport
				$('head').find('meta[name=viewport]').attr(
					'content',
					'user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'
				);
			
				//Add Tablet Class
				$('body').attr('size','tablet-styles');
			
				
			} else if (windowSize < 721){
				//Change meta tag to mobile viewport
				$('head').find('meta[name=viewport]').attr(
					'content',
					'user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'
				);
			
				//Add Mobile Class
				$('body').attr('size','mobile-styles');
			}
		}
		
		//Execute on Load
		checkWidth();
		$(window).resize(checkWidth);
	
	}
	
})(jQuery);