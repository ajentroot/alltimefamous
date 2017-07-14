var iddiv="";
var showdiv=false;
var posY = 0;
var posYold=0;

function calcParallax(tileheight, speedratio, scrollposition) {
	return ((tileheight - (Math.floor(scrollposition / speedratio) % (tileheight+1)))-tileheight);
}
function calcParallaxInv(tileheight, speedratio, scrollposition) {
	return ((tileheight + (Math.floor(scrollposition / speedratio) % (tileheight+1)))+tileheight);
}

function initParalaxPage(){
	var page = jQuery('#wrapper');
	page.bind('scroll',function() {
		posY = page.scrollTop();
		var layer1  = calcParallax(5600, 1.0, posY);
		var layer2  = calcParallax(5600, 1.0, posY);
		var layer3  = calcParallax(5600, 1.0, posY);
		var layer4  = calcParallax(5600, 1.0, posY);
		var layer5  = calcParallax(5600, 1.0, posY);
		var layer6  = calcParallax(5600, 1.0, posY);
		var layer7  = calcParallax(5600, 1.0, posY);
		var layer8  = calcParallax(5600, 1.0, posY);
		var layer9  = calcParallax(5600, 1.0, posY);
		var layer10 = calcParallax(5600, 1.0, posY);
		var layer11 = calcParallax(5600, 1.0, posY);
		var layer12 = calcParallax(5600, 1.0, posY);
		var layer13 = calcParallax(5600, 1.0, posY);
		var layer14 = calcParallax(5600, 1.0, posY);

		if((Math.abs(posY-posYold))>10){
			//jQuery(".bg-box1").animate({marginTop:layer1},{queue:false, duration: 600});	
			jQuery(".bg-box1a").animate({marginTop:layer1},{queue:false, duration: 200, "easing": "easeOutCubic"});	
			jQuery(".bg-box1b").animate({marginTop:layer2},{queue:false, duration: 400, "easing": "easeOutCubic"});	

			//jQuery(".bg-box2").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box2a").animate({marginTop:layer3},{queue:false, duration: 2000, "easing": "easeOutCubic"});	
			jQuery(".bg-box2b").animate({marginTop:layer4},{queue:false, duration: 1200, "easing": "easeOutCubic"});
			
			//jQuery(".bg-box3").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box3a").animate({marginTop:layer5},{queue:false, duration: 1200, "easing": "easeOutCubic"});	
			jQuery(".bg-box3b").animate({marginTop:layer6},{queue:false, duration: 1400, "easing": "easeOutCubic"});
			
			//jQuery(".bg-box4").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box4a").animate({marginTop:layer7},{queue:false, duration: 1200, "easing": "easeOutCubic"});	
			jQuery(".bg-box4b").animate({marginTop:layer8},{queue:false, duration: 1400, "easing": "easeOutCubic"});
			
			//jQuery(".bg-box5").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box5a").animate({marginTop:layer9},{queue:false, duration: 1200, "easing": "easeOutCubic"});	
			jQuery(".bg-box5b").animate({marginTop:layer10},{queue:false, duration: 1400, "easing": "easeOutCubic"});
			
			//jQuery(".bg-box6").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box6a").animate({marginTop:layer11},{queue:false, duration: 1200, "easing": "easeOutCubic"});	
			jQuery(".bg-box6b").animate({marginTop:layer12},{queue:false, duration: 1400, "easing": "easeOutCubic"});
			
			//jQuery(".bg-box7").animate({marginTop:layer1},{queue:false, duration: 400});	
			jQuery(".bg-box7a").animate({marginTop:layer13},{queue:false, duration: 1000, "easing": "easeOutCubic"});	
			jQuery(".bg-box7b").animate({marginTop:layer14},{queue:false, duration: 700, "easing": "easeOutCubic"});
		}
		
		posYold = page.scrollTop();

	});
	/*jQuery(window).mousewheel(function(event, delta, deltaX, deltaY){
		if(delta < 0) page.scrollTop(page.scrollTop() + 65);
		else if(delta > 0) page.scrollTop(page.scrollTop() - 65);
		return false;
	})*/
}
$(document).ready(function(){
	//fixedBoxes();
	//var win = $(window);
	jQuery(".bg-box1a").animate({top:100},{queue:false, duration: 1000, "easing": "easeOutCubic"});	
	jQuery(".bg-box1b").animate({top:200},{queue:false, duration: 1000, "easing": "easeOutCubic"});	

	a = $(window).height();
	//console.log(a);
	$('#wrapper').height(a);
	$('.bg-box1').height(a);
	diff = a - 800;

	$('.floatingBox').each(function(){
		boxTop = parseFloat($(this).css('top'));
		$(this).css('top',boxTop+diff);
	});

	$(window).resize(function(){
		b = $(window).height();
		//console.log(b);
		$('#wrapper').height(b);
		$('.bg-box1').height(b);
		/*diff1 = b - 800;
		$('.floatingBox').each(function(){
			boxTop1 = parseFloat($(this).css('top'));
			$(this).css('top',boxTop1+diff1);
		});*/
		window.location.reload(true);
	})
	initParalaxPage();
});