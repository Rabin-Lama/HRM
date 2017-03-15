        (function() {
    		var first = $('.step-1');
    		var second = $('.step-2');
    		var third = $('.step-3');
    		second.hide();
    		third.hide();
    		$('.first-next').click(function() {
    			first.fadeOut(1);
    			second.fadeIn(100);
    		})
    		$('.first-prev').click(function() {
    			first.fadeIn(100);
    			second.hide();
    		})
    		$('.second-next').click(function() {
    			second.fadeOut(1);
    			third.fadeIn(100);
    		})
    		$('.second-prev').click(function() {
    			second.fadeIn(100);
    			third.hide();
    		})
    	})();