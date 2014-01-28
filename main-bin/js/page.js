$(document).ready(function() {
	
	console.log("*****************************************************************");
	console.log("Promo 8 responsive v1");
	console.log("*****************************************************************");

	$('.nb-page-container').fadeIn(300);
	/* 
	set promo cookie
	 */
	//clear ntbx_promo value from user's browser
	$.removeCookie("ntbx_promo");
	//define ntbx_promo value -> this value represents the promo page name
	$.cookie("ntbx_promo", "promo 8", {
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
	console.log("3. url substr= " + url);
	console.log("4. url split= " + urlParam);
	
	/* *
	 click | constucts nav channel links
	 * */
	$(".nav_click").bind('click', function(e) {

		e.preventDefault();
		var nav_link = $(this).attr('data-navlink');
		console.log(nav_link);
		
		//var target=this.hash;
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');

		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value);
		//console.log("target= " + target);
		//console.log("ga_cat= " + ga_cat_value);
		//console.log("ga_action= " + ga_action_value);
		//console.log("ga_label= " + ga_label_value);

		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);

		//redirect to location
		//window.location.href = 'http://getclever.me/_projects/naturebox/5/' + nav_link + '.html';
		if(promo_param_value)
		{
			window.location.href = 'http://naturebox.com/offer/lp/t/2/' + nav_link + '.html?promo='+ promo_param_value;
		} else
		{
			window.location.href = 'http://naturebox.com/offer/lp/t/2/' + nav_link + '.html';
		}
		return false;
	});
	
	//Form Processing
	/*
	check to see if form.landing-handler exists
	form.landing-handler only shoots to static onestepcheckout
	form.landing-handler only supports passing promo code via input NOT url param
	*/
	var form_exist = $('form.landing-handler');
	console.log("4. form exit? " + form_exist);
		
	if (form_exist && promo_param_value) {
		$("#promo").attr("value", promo_param_value);
	}

	//track ga events of buttons
	$('button').bind('click', function(e) {
		e.preventDefault();
		//var target=this.hash;
		var ga_cat_value = $(this).attr('data-ga-cat');
		var ga_action_value = $(this).attr('data-ga-action');
		var ga_label_value = $(this).attr('data-ga-label');
		var button_value = $(this).attr('data-button');
		var thisForm = $(this).closest("form");
		var action = 'http://naturebox.com/landing/cms/handler';

		console.log("3. Event pushed=  "+"ga_cat= " + ga_cat_value +" | "+ "ga_action= " + ga_action_value+" | "+ "ga_label= " + ga_label_value+" | " + "button_value= " + button_value);


		//push ga events to ga analytics
		_gaq.push(['_trackEvent', ga_cat_value, ga_action_value, ga_label_value]);
		
		switch(button_value)
		{
			case "onestepcheckout":
				thisForm.attr('action', action).submit();
				//window.location.href='https://naturebox.com/landing/cms/handler';
				break;
			case "onestepcheckout-mobile":
				$('.landing-handler').attr('action', action).submit();
				//window.location.href='https://naturebox.com/landing/cms/handler';
				break;
			case "snacks":
				window.location.href='http://naturebox.com/offer/lp/t/2/snacks.html';
				break;
			case "onestepcheckout-sg":
				$('.landing-handler').attr('action', action).submit();
				//action on Satisfaction Guaranteed statement
				break;
			case "raves":
				window.open('https://www.facebook.com/NatureBox/app_127549637443256');
				break;
			default:
				return false;
				
		}
		//send guest to LP
		//window.location.href='http://naturebox.com/offer/promo4.html';
		//return false;
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


$(document).foundation({
  orbit: {
    animation: 'fade',
    timer_speed: 3500,
    pause_on_hover: true,
    animation_speed: 100,
    navigation_arrows: true,
    bullets: true
  }
});