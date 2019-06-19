(function ($) {
  $(document).ready(function(){
    
	// hide .intro first
	 // $(".hi").hide(); 
	
	// fade in .navbar
	// $(function () {
	// 	$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
	// 		if ($(this).scrollTop() > 50) {
	// 			$('.navbar-dark').fadeOut();
	// 		} else {
	// 			$('.navbar-dark').fadeIn();
	// 		}
	// 	});

	var lastScrollTop = 0;
		$(window).scroll(function(event){
   		var st = $(this).scrollTop();
   			if (st > lastScrollTop){
       		// downscroll code
       		$('.navbar-dark').fadeOut();

   			} else {
      		// upscroll code
      		$('.navbar-dark').fadeIn();
   			}
   			lastScrollTop = st;
			});
	// });


	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 100) {
				$('#intro h1').fadeOut();
				$('#intro h3').fadeOut();
				$('.intro_icons').fadeOut();
				
			} else {
				$('#intro h1').fadeIn();
				$('#intro h3').fadeIn();
				$('.intro_icons').fadeIn();
				
			}
		});

	
	});

	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
})
});
  }(jQuery));

