

jQuery(document).ready(function() {
	jQuery(function() {

		setTimeout(function() {
			jQuery('.fly-in-text').removeClass('hidden');
		}, 1000);
		setTimeout(function() {
			jQuery('.animate-from-right').removeClass('hide-r');
		}, 2000);

	});

	jQuery('.carousel').carousel({
  		interval: 1000000
	});

	jQuery(function() {

		setTimeout(function() {
			jQuery('.anim').removeClass('hid');
		}, 1000);

	}); 


	jQuery(window).scroll(function(){
		jQuery('nav').toggleClass('scrolled', jQuery(this).scrollTop() > 350);
		/*if (jQuery(this).scrollTop() > 350) {
			jQuery('#flogo').attr('height','50');
		} else {
			jQuery('#flogo').attr('height','60');
		}*/
	});
	jQuery(window).scroll(function(){
		var hasHeightClass = jQuery('.pic').hasClass('scrolled1');
		//console.log(jQuery(this).scrollTop());
		if (150 < jQuery(this).scrollTop() && !hasHeightClass) {
		    jQuery('.pic').addClass('scrolled1');
		}
	});

	// else if (hasClass) {
	    //$('.pic').removeClass('height');
	//}

	//jQuery(window).scroll(function(){ 
	//	if (jQuery(this).scrollTop() > 150) { /* Toggle each time*/
	////	}
		//jQuery('.pic').toggleClass('scrolled1', jQuery(this).scrollTop() > 150); Not mobile friendly
	//});
	// Click event for any anchor tag that's href starts with #
	jQuery('a[href^="#"]').click(function(event) {

	    // The id of the section we want to go to.
	    var id = jQuery(this).attr("href");

	    // An offset to push the content down from the top.
	    var offset = 60;

	    // Our scroll target : the top position of the
	    // section that has the id referenced by our href.
	    var target = jQuery('#map').offset().top - offset;

	    // The magic...smooth scrollin' goodness.
	    jQuery('html, body').animate({scrollTop:target}, 500);

	    //prevent the page from jumping down to our section.
	    event.preventDefault();
	});
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.display === "block") {
			content.style.display = "none";
		} else {
			content.style.display = "block";
		}
		});
	}
});
