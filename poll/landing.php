<?php $nexturl='index.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <title>instawaiter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="assets/css/font-awesome.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="js/owl.carousel.css">
			<link rel="stylesheet" href="js/owl.theme.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>

  	<div id="fb-root"></div>
    <div class='container'  align="center">
    	<div class="row">
    	</br>
    	</br>
    	</div>
    	<div class='toprow row-fluid'>
    		<div class='span4' align="center">
    		</div>
    		<div class='span4' align="center">
    			<div class='lgctnr' style='height:50px;'>
						<img style='display:none;' class='blueloader img-rounded' src='img/ajax-loader.gif'  />	
						<a href="#" class='login' onclick="dologin();"><img src='img/Connect-fb.png' /></a>
				</div>
    		</div>
    		<div class='span4 togbut' align="center">
    		</div>
    	</div>
        	
        
        <div class='row-fluid start loginrow'  align="center" > 
        
	    </div>
	</div>
  </body>		
        
       
     
    
    
    
    
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
  <script>

   
  	function dologin() {
				FB.login(function(response){},{scope: 'email , user_location, friends_location'}); return false;
			}


 </script>
  <script>
			    window.fbAsyncInit = function() {
			    // init the FB JS SDK
			    FB.init({
			      appId      : '606061749430384',                        // App ID from the app dashboard
			      status     : true,                                 // Check Facebook Login status
			      xfbml      : true                                  // Look for social plugins on the page
			    });
			
			    // Additional initialization code such as adding Event Listeners goes here
				    FB.Event.subscribe('auth.statusChange', function(response) {
				          
				          if (response.authResponse) {
				            
				            $('.login').fadeOut(function(){
				            	$('.blueloader').fadeIn();
				            });
				            
				            at = response.authResponse.accessToken ;
				            //alert(at);
				            
				            $.ajax({
				    		type: "POST",
				    		data: { at: at },
						 		url: "ajaxconnect.php",
						 		cache: false,
						 		dataType: "json",
						 		success: function(data) {
						 			    console.log(data);
						 				targefriendsids= new Array() ;
						 				$('.name').html(data.first_name);
						 				$('.blueloader').height(50);
						 				$('.blueloader').attr('src', 'https://graph.facebook.com/'+data.id+'/picture');
						 				$('.loginrow').fadeOut(function(){
						 				$('.userfbid').html(data.id);	
						 				 <?php if (isset ($nexturl)) { ?> 
						 				 	
						 				 	top.window.location.href = '<?=$nexturl?>' ;  
						 				 	
						 				 <?php	} ?>
						 				
						 				})
						 				
						 				 
						 			}
						 		});
				            
				          
				          } 
	        		});
			    
			 };
			  // Load the SDK asynchronously
			  (function(d, s, id){
			     var js, fjs = d.getElementsByTagName(s)[0];
			     if (d.getElementById(id)) {return;}
			     js = d.createElement(s); js.id = id;
			     js.src = "//connect.facebook.net/en_US/all.js";
			     fjs.parentNode.insertBefore(js, fjs);
			   }(document, 'script', 'facebook-jssdk'));

function share() {
	
	FB.ui({
	    method: 'feed',
	    name: 'Instawaiter',
	    link: 'http://instawaiter.com/poll/',
	    picture: 'http://instawaiter.com/poll/img/share.jpg',
	    caption: 'Being The Envy Of Your Friends Is Priceless',
	    description: 'We all love food. And all tell our friends about our most awesome food experience. We believe you should be rewarded for spreading the word for your fav restaurants. So help us create a service that you will love and we will show you how you can ... '
    	},
  		
  		function(response) {
    		if (response && response.post_id) {} else {}
  			}
	);
}			

function send(){
	targ= $('#targefriendsids').val().split(',');
	FB.ui({
		method: "send",
	    link: "http://instawaiter.com/poll/",
	    to: targ
	});
}

</script>
 
</html>