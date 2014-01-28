$(document).ready(function() {
	console.log("*****************************************************************");
	console.log("Promo 7 responsive v1");
	console.log("*****************************************************************");

	$('.nb-page-container').fadeIn(300);
	$('.leftarrow').hide();

	/* 
	set promo cookie
	 */
	//clear ntbx_promo value from user's browser
	$.removeCookie("ntbx_promo");
	//define ntbx_promo value -> this value represents the promo page name
	$.cookie("ntbx_promo", "promo 7r", {
		expires : 14
		//path : '/offer',
		//domain : 'naturebox.com'
	});
	
	//grab promo code value
	var promo_param_value = $.url().param('promo');
	//grab cookie ntbx_promo value
	var promoValue = $.cookie("ntbx_promo");
	
	//grab url params and throw it onto links
	var url = location.search.substr(1);
	var urlParam = url.split('?');
	
	//log values
	console.log("1. Promo Page is= " + promoValue);
	console.log("2. Promo Code Value is= " + promo_param_value);

	//pageslide.js to reveal Newsletter Email Signup Form
	$(".click-newsletter-signup").bind('click', function(e) {
		e.preventDefault();
		$.pageslide({
			direction : 'right',
			href : 'http://naturebox.com/offer/lp/t/1/_email.html?'+ urlParam
		});
		//$('.leftarrow').toggle();
		
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');
		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value);
		//console.log("ga_cat= " + ga_cat_value);
		//console.log("ga_action= " + ga_action_value);
		//console.log("ga_label= " + ga_label_value);

		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);
	});

	//track ga events
	$('.ga-event-tracking').bind('click', function(e) {
		e.preventDefault();
		//var target=this.hash;
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');

		//console.log("target= " + target);
		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value);
		//console.log("ga_cat= " + ga_cat_value);
		//console.log("ga_action= " + ga_action_value);
		//console.log("ga_label= " + ga_label_value);

		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);

		//send guest to LP
		//window.location.href='http://naturebox.com/offer/promo4.html';
		//return false;
	});

	/* *
	 click | constucts nav channel links
	 * */
	$(".nav_click").bind('click', function(e) {

		e.preventDefault();
		var nav_link = $(this).attr('data-navlink');
		console.log(nav_link);

		window.location.href = 'http://naturebox.com/offer/lp/t/1/' + nav_link + '.html';
		return false;
	});
	$(".logo").bind('click', function(e) {
		e.preventDefault();
		window.location.href = 'http://naturebox.com/offer/lp/t/1/promo7.html';
		return false;
	});
	
	
	//Form Processing
	/*
	check to see if form.landing-handler exists
	form.landing-handler only shoots to static onestepcheckout
	form.landing-handler only supports passing promo code via input NOT url param
	*/
	var form_exist = $('form.landing-handler');
		
	if (form_exist && promo_param_value) {
		$("#promo").attr("value", promo_param_value);
	}
	//track ga events of buttons
	$('button').bind('click', function(e) {
		//e.preventDefault();
		//var target=this.hash;
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');

		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value);


		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);

		//send guest to LP
		//window.location.href='http://naturebox.com/offer/promo4.html';
		//return false;
	});
	
	
	//track Rachael Ray
	$('.as-seen-on').bind('click', function(e) {
		//e.preventDefault();
		//var target=this.hash;
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');

		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value);


		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);

		//send guest to LP
		//window.location.href='http://naturebox.com/offer/promo4.html';
		//return false;
	});

/*
	//mobile check out
	$(".form-click-signup").bind('click', function(e) {

		e.preventDefault();
		//$("#signup-form").foundation('reveal', 'open');
		window.open('https://naturebox.com/onestepcheckout/?promo=' + promo_param_value, "_self");

	});
*/	

	$(".bbb-logo").bind('click', function(e) {
		e.preventDefault();
		window.open('http://www.bbb.org/greater-san-francisco/business-reviews/food-manufacturers-wholesalers-distributors/naturebox-in-san-carlos-ca-442815', 'Naturebox');
		//window.location.href = 'http://www.bbb.org/greater-san-francisco/business-reviews/food-manufacturers-wholesalers-distributors/naturebox-in-san-carlos-ca-442815';
		return false;
	});
	/*
	 ================================================================
	 modal
	 ================================================================
	 */
	$('.open-modal').bind('click', function(e) {
		e.preventDefault();
		target = this.hash;

		//open modal container
		console.log(target);
		$(target).foundation('reveal', 'open');

		//close modal container
		$(target).on('click', function() {

			$('a.close-reveal-modal').foundation('reveal', 'close');

		});
	});

	
	/* *
	Add targeting cookie for contest modal popup
	* */
	//check to see if browser has ntbx_offer cookie value
	var cookieValue = $.cookie("ntbx_offer");
	//console.log(cookieValue);
	//assign src value to email modal popup by adding urlParam to link
	$('#modal-email-signup iframe').attr('src',"http://naturebox.com/offer/popup/responsive/email-popup.html?" + urlParam);
	// if guest has targeting cookie, then contest modal will not display
	if (!cookieValue) {

		setTimeout(function() {
			$("#modal-email-signup").foundation('reveal', 'open');
		}, 300);
		
		console.log("5. Contest modal was displayed");

		$.cookie("ntbx_offer", 1, {
			expires : 14
			//path : '/offer',
			//domain : 'naturebox.com'
		});

		//$.removeCookie("ntbx_offer");
	};

});

/*
$(document).foundation('orbit', {
	animation : 'slide',
	timer_speed : 7000,
	pause_on_hover : true,
	resume_on_mouseout : true,
	animation_speed : 2000,
	stack_on_small : true,
	navigation_arrows : false,
	slide_number : false,
	container_class : 'orbit-container',
	stack_on_small_class : 'orbit-stack-on-small',
	next_class : 'orbit-next',
	prev_class : 'orbit-prev',
	timer_container_class : 'orbit-timer',
	timer_paused_class : 'paused',
	timer_progress_class : 'orbit-progress',
	slides_container_class : 'orbit-slides-container',
	bullets_container_class : 'orbit-bullets',
	bullets_active_class : 'active',
	slide_number_class : 'orbit-slide-number',
	caption_class : 'orbit-caption',
	active_slide_class : 'active',
	orbit_transition_class : 'orbit-transitioning',
	bullets : true,
	timer : true,
	variable_height : false,
	before_slide_change : function() {
	},
	after_slide_change : function() {
	}
});
*/