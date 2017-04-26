/*
Plugin: jQuery Parallax
Version 1.1.3
Author: Ian Lunn
Twitter: @IanLunn
Author URL: http://www.ianlunn.co.uk/
Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html

original code was modified by Igor for Moon Beyond's purposes. Comments appear where changes were made
*/

(function( $ ){
	var $window = $(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});

	$.fn.parallax = function(xpos, speedFactor, outerHeight) {
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;
		
		//get the starting position of each element to have parallax applied to it		
		$this.each(function(){
		    firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function(jqo) {
				return jqo.outerHeight(true);

			};
		} else {
			getHeight = function(jqo) {
				return jqo.height();
			};
		}

		
			
		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;
		
		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();				

			$this.each(function(){
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// console.log(top + height + " is the length to bottom of " + $this.attr('class') + " " + pos + " is the position of window scroll.\n" + firstTop + " is the offset to the top of the parallax thing" + "\n" + $(window).height() + " is the window height and " + $(window).height() * speedFactor + " is the amount to move down for the window height." + "\n" + Math.round((firstTop - pos) * speedFactor - $(window).height() * speedFactor) + "px");

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}

				//changed this section to accomodate parallax needed for the split-background section. The default implementation only worked for images at the very head of the site. If the section
				//was at all below any other elements, it would start off offset down
				if ($(window).width() > 1030) {
					if ($this.hasClass("split-background-top")) {
						$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor - $(window).height() * speedFactor) + "px");
					} else if ($this.hasClass("split-background-bottom")) {
						//this sort of works but is not ideal. 4.6 seemed to get it close enough to the end of the image without goin over the edge. Could probably be made better by automatically
						//calculating the amount of pixels to add to background position to let it reach the bottom as the window scrolls down, without rolling over to another copy.
						$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor - $(window).height() * speedFactor * 4.6) + "px");
					} else {
						$this.css({'backgroundPosition': xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px", 'backgroundSize': 'cover', 'height': '50vh'});
					} 
				} else {
			    	$this.css({'height':'50vh', 'backgroundSize':'cover'});
				}
				
			});
		}		

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);
