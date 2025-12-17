$(document).ready(function(){

	// Blur images on mouse over
	$(".portfolio a").hover( function(){ 
		$(this).children("img").animate({ opacity: 0.75 }, "fast"); 
	}, function(){ 
		$(this).children("img").animate({ opacity: 1.0 }, "slow"); 
	}); 
	
	// Initialize prettyPhoto plugin
	$(".portfolio a[class^='pP']").prettyPhoto({
		theme:'pp_default', 
		autoplay_slideshow: false, 
		overlay_gallery: false, 
		show_title: false
	});

	// Clone portfolio items to get a second collection for Quicksand plugin
	var $portfolioClone=$(".portfolio").clone();
	
	// Attempt to call Quicksand on every click event handler
	$(".filter a").click(function(e){
		
		$(".filter li").removeClass("current");	
		
		// Get the class attribute value of the clicked link
		var $filterClass=$(this).parent().attr("class");

		if ( $filterClass == "all" ) {
			var $filteredPortfolio=$portfolioClone.find("li");
		} else {
			var $filteredPortfolio=$portfolioClone.find("li[data-type~=" + $filterClass + "]");
		}
		
		// Call quicksand
		$(".portfolio").quicksand( $filteredPortfolio, { 
			duration: 800, 
			easing: 'easeInOutQuad' 
		}, function(){
			
			// Blur newly cloned portfolio items on mouse over and apply prettyPhoto
			$(".portfolio a").hover( function(){ 
				$(this).children("img").animate({ opacity: 0.75 }, "fast"); 
			}, function(){ 
				$(this).children("img").animate({ opacity: 1.0 }, "slow"); 
			}); 
			
			$(".portfolio a[class^='pP']").prettyPhoto({
				theme:'pp_default', 
				autoplay_slideshow: false, 
				overlay_gallery: false, 
				show_title: false
			});
		});


		$(this).parent().addClass("current");

		// Prevent the browser jump to the link anchor
		e.preventDefault();
	})
	
});
$(window).scroll(function(){

  var scroll=$(window).scrollTop()

  if (scroll > 0 ) {
    $('container').addClass('scrolled');
  }

  if (scroll <= 0 ) {
    $('container').removeClass('scrolled');
 }

});

$(document).ready(function(){

        var $menu=$("#top-m");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 80 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 80 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });//scroll

        $menu.hover(
            function(){
                if( $(this).hasClass('fixed') ){
                    $(this).removeClass('transbg');
                }
            },
            function(){
                if( $(this).hasClass('fixed') ){
                    $(this).addClass('transbg');
                }
            });//hover
	
		//Submenu Deploy//
	

	
	$('.nav-sub-active').slideToggle(200);
	$('.deploy-nav-sub-item').click(function(extended_menu){	
		$(this).parent().find('.nav-sub-item').slideToggle(200);
		var navItem=$(this).parent().offset().top -  $(this).parent().parent().offset().top;
		$('.outer-nav').animate({
			scrollTop: navItem
		}, 200);	
		console.log(navItem);
		return false;
	});
	
	// Remove the comments to enable scrolling to the selected submenu when opening the nav.
	// Be sure to add to the main anchor class deploy-nav-sub-item nav-sub-scroll for this to work
		$('#logo').click(function(){
			if ( $('.nav-sub-item').hasClass('nav-sub-active')){
				var navItems=$('.nav-sub-scroll').parent().offset().top - $('.nav-sub-scroll').parent().parent().offset().top;
				$('.outer-nav').delay(200).animate({
					scrollTop: navItems
				}, 200);	
				return false;
			};
		});
	
    });//jQuery