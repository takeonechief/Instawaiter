<!DOCTYPE html>
<html>
  <head>
    <title>Poll</title>
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
    <style>
    	body {background-color:#F8F8F8;}
    	.blueloader {display:none;}
    	.next {margin-left: 15px;}
    	.chk {
    	width:35px;
    	height:36px;
    	background: url('img/ico.png') 0 -39px no-repeat;
    	
    	}
    	.span4 {background:none;}
    	.chk:hover {background: url('img/ico.png') 0 0px no-repeat;}
    	.chk_on {background-position:  0 0px ;}
    	.holder {height:150px; width:250px; background-color: #F7F7F7; cursor: pointer; border: 1px solid #F7F7F7 ; }
    	.restcont {height:250px; }
    	.nameholder {height:40px; background-color:#fff ; border: 1px solid #BEBEC5 ; overflow:hidden;}
    	.nameholder_selected {height:40px; background-color:#292929; color:#fff ; border: 1px solid #292929; overflow:hidden;}
    	.selected {border: 1px solid #D64B45 ;}
    	.chief {
    		height:135px;
    		width:101px;
    		background: url(img/chief.png) 0 -135px; no-repeat;}
    	.chief_selected {
    		background-position:  0 0px; no-repeat;}
    	.city_holder {position:relative; background-color:#0e4057 ; text-align:center; color:#fff;}	
    	.city_details {background-color:#0e4057 ; height : 130px; opacity:0.7; }  
    	.city_details h4 {display:none ; padding: 5px 20px 5px 20px ; opacity:1 ;}
    	.city_holder img {width:100%;}
    	.toprow {height:30px;  }
    	.city_text {position:absolute; width: 100%}
    	.friendsholder { height:30px; text-align:inherit; overflow: hidden;}
    	.friendsholder img { width:inherit; height:100%;}
    	.nodis {display: none;}
    	.loginrow {cursor: pointer;}
    	.getstart {cursor: pointer;}
    	.lock  {height:30px; margin:5px 10px 5px}
    	.data_inputs {display:none;}
    	
    	
    </style>
  </head>
  <body>

  	<div id="fb-root"></div>
    <div class='container'  align="center">
    	<div class='toprow row-fluid'>
    		<div class='span4' align="center">
    				
			</div>
    		<div class='span4' align="center">
    			<div class='lgctnr' style='height:50px;'>
						<img class='blueloader img-rounded' src='img/ajax-loader.gif'  />	
						<a href="#" class='login' onclick="dologin();"><img src='img/Connect-fb.png' /></a>
				</div>
    			
    			<!--
    			<p>Creating the most foodie awesome experience</p>
    			-->
    		</div>
    		<div class='span4 togbut' style='display:none;' align="center">
    			</br> 
    		<span id='page'>1</span>  of 3<a class='next btn btn-danger btn-large'>Next</a>
    		</div>
    	</div>
        	<hr><img src='img/bowtie.png' class='img-rounded' /></hr>
        	<!--
        	<h5>Being The Envy Of Your Friends Is Priceless</h5>
        	-->
        <div class='row-fluid start loginrow'  align="center" > 
        <h4>What if we can help you eat for free</h4>    
        <img src='img/int.png' />
	    </div>		
        <div class='o nodis' >	
        <div class='row-fluid start'  align="center" > 
        	<div class='span4'></div>
        	<div class='span4'>
        	
        	<h4>Hooray <span class='name'></span> thanks for signing up</h4>
        	<p>We all love food. And all tell our friends about our most awesome food experience. We believe you should be rewarded for spreading the word for your fav restaurants. So help us create a service that you will love and we will show you how you can ... </p>
			<h5>ALWAYS EAT FOR FREE</h5> 
				<div class='row getstart'>
					<div class='span4 offset4'>
					<h4 style='color:#BC0000;'>Get started</h4>       	
		        	</div>
					<div class='span2'>
						<img style='height:45px;' src='img/arrow-right.png'/>
		        	</div>
				</div>
			</div>
			<div class='span4'></div>
        </div>
        </br>
        <div class='row-fluid start' id='cityrow'  align="center" > 
        	<div class='span4 city_holder img-rounded'>
        		<div class='city_text'>
        			<h3>Los Angeles</h3>
        			<h1  class='count lacount'>0</h1>
        		</div>
        		<img src="img/city-la.jpg" class="img-rounded" />
        		<div class='city_details img-rounded'>
        			<div id='lafriends' class='friendsholder'></div>
        			<img id='lalock' class='lock' style="width:inherit; " src='img/lock.png'/>
        			<img  class='check' style="width:inherit; margin:10px; display:none;" src='img/circle-check-white.png'/>
        			<h4 id='launlock' class='lock'  style='display:none;' ><span class='lacount'>0</span> friends in Los Angeles will help you eat for free </h4>
        			
        			<p class='lock' >Complete poll to find out more..</p>
        			<p style='display:none;' class='finalp'><span class='lacount'>0</span> friends in Los Angeles</p>
        		</div>
        	</div>
        	<div class='span4 city_holder img-rounded'>
        		<div class='city_text'>
        			<h3>San Francisco</h3>
        			<h1 class='count sfcount'>0</h1>
        		</div>
        		<img src="img/city-sf.jpg" class="img-rounded" />
        		<div class='city_details img-rounded'>
        			<div id='sffriends' class='friendsholder'></div>
        			<img id='sflock' class='lock'  style="width:inherit;" src='img/lock.png'/>
        			<img  class='check' style="width:inherit; margin:10px; display:none;" src='img/circle-check-white.png'/>
        			
        			<h4 id='sfunlock' class='lock' style='display:none;'><span class='sfcount'>0</span> friends in San Francisco will help you eat for free </h4>
        			<p style='display:none;' class='finalp'><span class='sfcount'>0</span> friends in San Francisco</p>
        			<p class='lock'>Complete poll to find out more..</p>
        		</div>
        	</div>
        	<div class='span4 city_holder img-rounded'>
        		<div class='city_text'>
        			<h3>New York</h3>
        			<h1 class='count nycount'>0</h1>
        		</div>
        		<img src="img/city-ny.jpg" class="img-rounded" />
        		<div class='city_details img-rounded'>
        			<div id='nyfriends' class='friendsholder'></div>
        			<img id='nylock' class='lock'  style="width:inherit; " src='img/lock.png'/>
        			<img  class='check' style="width:inherit; margin:10px; display:none;" src='img/circle-check-white.png'/>
        			
        			<h4 id='nyunlock' class='lock' style='display:none;'><span class='nycount'>0</span> friends in New York will help you eat for free </h4>
        			<p style='display:none;' class='finalp'><span class='nycount'>0</span> friends in New York </p>
        			<p class='lock'>Complete poll to find out more..</p>
        		</div>
        	</div>
        	
        </div>
        <hr></hr>
        </div>
       <div class='row-fluid second' style='display:none;' align="center" >
       		<div class='input-append'>
    		<h4>Which restaurant do you want us to curate from in <span id='city'></span> </h4>
    		<select id='neig-select' style='display: none;'>
    		</select>
			 <div id='unavailable' style='display:none'>
			 	<h6>Sorry we actually focus on LA SF and CA for neighborhood search.</h6>
			 </div>
			</div>
    		
    	</div>
    <div class='first' style='display:none;' >
    	<div class='row-fluid first' align="center" >
    		<div class='span'>
    		<h4>What is the ultimate foodie experience do you desire?</h4>	
    		</div>
    		
    	</div>
    	<div class='row-fluid' >
    		
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>exlusif and limited</p></div>
    			<div><div class='chk'></div></div>
    		</div>
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>something new and inventive</p></div>
    			<div><div class='chk'></div></div>
    		</div>
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>adventurous and daring</p></div>
    			<div><div class='chk'></div></div>
    		</div>
    	</div>
    
    </br>
    	<div class='row-fluid'>
    		
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>same ol' with a new twist</p></div>
    			<div><div class='chk'></div></div>
    		</div>
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>top secret, off menu</p></div>
    			<div><div class='chk'></div></div>
    		</div>
    		<div class='span4 ' align="center">
    			<div class='holder'></div>
    			<div><p>I'm not a daring foodie </p></div>
    			<div><div class='chk'></div></div>
    		</div>
    	</div>
    	
    
   </br>
   </br>
    </div>
    
    <div class='second' style='display:none'>
    	<div id="chart2" style="width: 100%;"></div>
    	<div style='min-height: 50px;'>
    	<div id='ajaxloader' align='center' style='display:none'><img src='img/ajax-loader.gif'/> </div>
    	</div>
    		
    		<div id='explore' ></div>
   
   </br>
   </br>
    <div class='row-fluid' align="center">
    	<a class='next btn btn-danger btn-large'>Next</a>
    </div>
    </div>
    
    <div class='third ' style='display:none'>
    <div class='row-fluid'>
    	<h4>What is the value of such an experience?</h4>
    	<select id='expvalue'>
    			<option value="0">$8-10 per dish</option>
    			<option value="1">$10-20 per dish</option>
    			<option value="2">$20-30 per dish</option>
    			<option value="3">$30-40 per dish</option>
    			<option value="4">$40-50 per dish</option>
    	</select>
   </div>
    	
    
   </br>
   </br>
    <div class='row-fluid' align="center">
    	<a class='next btn btn-danger btn-large'>Next</a>
    </div>
    </div>
    
    <div class='forth' style='display:none'>
    <div class='row-fluid'>
    	<h6>Thanks for finishing the pooll, here is how you can</h6>
    	<h4>eat for free</h4>
    	<div id='duplic'></div> 
    	
   </div>
    	
    
   </br>
   </br>
    <div class='row-fluid' align="center">
    	<div class='span4'>
    		<p>Recruit <span class='totaltarget'> </span> followers by sending a Facebook message</p>
    		<button class="btn btn-large btn-primary" onclick="send(); return false;" >Send Facebook message</button>
    	</div>
    	<div class='span4'><p>When you become an instawaiter food critic, you build your followers. When your followers purchase a dish you have reviewed you earn cash reward.</p>
    		<p>To ensure you spot in our initial beta, <span style='color:red'>Recruit 20 friends</span> to follow you at your instawaiter page.</p>
    		<h4>http://instawaiter.com/critics/<span class='userfbid'>001</span></h4>
    	</div>
    	<div class='span4'>
    		<p>Recruit followers with a Facebook post</p>
    		<button onclick='share(); return false;' class="btn btn-large btn-primary">Post on Facebook</button>
    	</div>
    </div>
    
    
    </div>
    
    <div class='data_inputs'>
    	<input type="text" id="firstchoice">
    	<input type="text" id="secondchoice">
    	<input type="text" id="targefriendsids">
    </div>
	
	<script type="text/x-handlebars-template" id="neigtemp">
	{{#list neig}}
		
		<option value="{{name}}">{{name}}</option>
		                            
	{{/list}}  
	</script>
    
	
	
	<script type="text/x-handlebars-template" id="mentemplate">
	{{#list businesses}}
		<div class='restcont' style="margin-bottom: 25px; padding:15px;">
			<a href="#" onclick="dohover('{{id}}');return false;" ><div id='{{id}}' class='chief'></div></a>
			<div class='nameholder' id='nameholder{{id}}'>
			<h7>{{name}}</h7>
			<div>
	        	<p>{{location.neighborhoods}}</p>
	        </div>
			</div>
		    
	    	<div align='center'>
		    	
		    	<div>
		    		<img src='{{rating_img_url}}' />
		    	</div>
			   
			   	<div>
		    		<p>Rating: {{rating}}</p>
		    		
		    	</div>
		    </div>
	    </div>
		                            
	{{/list}}  
	</script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='js/handlebars.js'></script>
	<script src="js/owl.carousel.min.js"></script>
  </body>
  <script>
  $('.holder').bind( "click",function(){
   	   
   	   if ( $(this).hasClass("selected") ) {
   	   	$(this).removeClass('selected');
   	   	$(this).next().next().children('.chk').removeClass('chk_on');
   	   
   	   } else {
   	   	$(this).next().next().children('.chk').addClass('chk_on');
   	   	$(this).addClass('selected');
   	   }
   	   
   	   
   	   // $count = parseInt($("#page").html())+1;
   	    //$("#page").html($count);
	   	//$('.first').fadeOut('slow', function(){
	   		//$('.second').fadeIn('slow');
	   	//});
   });
   
   $('.restcont').bind( "click",function(){
   	   
   	   if ( $(this).hasClass("selected") ) {
   	   	$(this).removeClass('selected');
   	   	} else {
   	   	$(this).addClass('selected');
   	   	
   	   }
   });
  
   function dohover(id) {
   	
   	if ( $("#"+id).hasClass("chief_selected") ) {
   	   	$("#"+id).removeClass('chief_selected');
   	   	$("#nameholder"+id).removeClass('nameholder_selected');
   	   	
   	   	} else {
   	   	$("#"+id).addClass('chief_selected');
   	   	$("#nameholder"+id).addClass('nameholder_selected');
   	   	
   	   }
   	
   }
   $('.next').bind( "click",function(){ 
   	
   	$count = parseInt($("#page").html())+1;
   	if($count === 2 ) {
   		$target=$('.second') ;
   		$initial = $('.first') ;
   	}
   	
   	if($count === 3 ) {
   		$('.next').html('Finish');
   		$target=$('.third') ;
   		$initial = $('.second') ;
   	}
   	
   	if($count === 4 ) {
   		$count = $count - 1 ;
   		$('.check').show();
   		$('.lock').hide();
   		$('.finalp').show();
   		$('.togbut').fadeOut();
   		$('.next').fadeOut();
   		$html=$('#cityrow').html();
   		$('#duplic').html($html);
   		$target=$('.forth') ;
   		$initial = $('.third') ;
   	}
   	
   	$("#page").html($count);
   	$initial.fadeOut('slow', function(){
	   		$target.fadeIn('slow');
	   	});
   });
 	
 	
 	function getresponse(city , type ) {
 		
 		$.ajax({
								    		type: "GET",
								    		data: { city: city , type : type },
										 		url: "phpyelp/example.php",
										 		cache: false,
										 		dataType: "json",
										 		success: function(citydata) {
										 				//console.log(citydata.length)
										 				fillrest(citydata) 
										 			 }
										 		
										 });
 		
 	}
 
 	function fillrest (data) {
	
		if(!data.error) {
			var source   = $("#mentemplate").html();
			var template = Handlebars.compile(source);
			var context = data ;
			Handlebars.registerHelper('list', function(context, options) {
			  var out = "";
			  for(var i=0, l=context.length; i<l; i++) {
			    out = out + options.fn(context[i]) ;
			  }
			  return out ;
			});
			var html    = template(context);
			$('#explore').html(html)
			$('#ajaxloader').fadeOut();
				
				
			if($("#explore").data('owlCarousel')) {
				$("#explore").data('owlCarousel').destroy();
			}	
				
				$("#explore").owlCarousel({
						    items : 5,
						    //lazyLoad : true
						    navigation : true,
						    scrollPerPage : true
						  }); 
		}
  }
  
  function fillneig (data) {
	var source   = $("#neigtemp").html();
	var template = Handlebars.compile(source);
	var context = data ;
	Handlebars.registerHelper('list', function(context, options) {
	  var out = "";
	  for(var i=0, l=context.length; i<l; i++) {
	    out = out + options.fn(context[i]) ;
	  }
	  return out ;
	});
	
	var html    = template(context);
	$('#neig-select').html(html)
	$('#neig-select').fadeIn();
 		

  }
  
  $('#neig-select').on('change', function() {
  	loader=$('#ajaxloader').show();
  	neig = encodeURIComponent(this.value);
  	getresponse(neig,1);
  });


  
   
  	function dologin() {
				FB.login(function(response){},{scope: 'email , user_location, friends_location'}); return false;
			}

function dochart(data) {
    // For horizontal bar charts, x an y values must will be "flipped"
    // from their vertical bar counterpart.
   
    var plot2 = $.jqplot('chart2', [
        data  ], {
        seriesDefaults: {
            renderer:$.jqplot.BarRenderer,
            // Show point labels to the right ('e'ast) of each bar.
            // edgeTolerance of -15 allows labels flow outside the grid
            // up to 15 pixels.  If they flow out more than that, they 
            // will be hidden.
            pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
            // Rotate the bar shadow as if bar is lit from top right.
            shadowAngle: 135,
            // Here's where we tell the chart it is oriented horizontally.
            rendererOptions: {
                barDirection: 'horizontal'
            }
        },
        axes: {
            yaxis: {
                renderer: $.jqplot.CategoryAxisRenderer
            }
        }
    });
}
function json2array(json){
	console.log(json);
    var result = [];
    i = 0 ;
    var keys = Object.keys(json);
    keys.forEach(function(key){
       if(json[key] > 10 ) {
       	if (i<4) {
       		result.push( [  json[key] , key  ] );
       		i = i+1	
       	}
       	
       }
        
    });
    return result;
}

$('.loginrow').click(function(){
	dologin();
})

$('.getstart').click(function(){
	
	$('.o').fadeOut(function(){
		$('.first').fadeIn();
		$('.togbut').fadeIn();
	})
})






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
						 				$('#city').html(data.location.name);
						 				//city=encodeURIComponent(data.location.name);
						 				ll = data.city_details.location.latitude +','+data.city_details.location.longitude ;
						 				getresponse(ll,0);
						 				
						 				if(data.neig) {
						 					fillneig (data)
						 				} else {
						 					$("#unavailable").fadeIn();
						 				}
						 				//console.log(data.locations);
						 				//console.log(json2array(data.locations))
						 				//dochart(json2array(data.locations));
						 				totaltarget = 0 ;
						 				targefriendsids= new Array() ;
						 				if(data.locations['110970792260960']) { 
						 					
						 					$('.lacount').html(data.locations['110970792260960']);
							 					totaltarget=totaltarget + data.targetlocations['110970792260960'].length;
							 					data.targetlocations['110970792260960'].forEach(function(entry) {
												    img="<img src='https://graph.facebook.com/"+entry+"/picture' class='pull-left img-rounded'  />";
												    $('#lafriends').prepend(img);
													
													targefriendsids.push(entry);
												
												});
						 					
						 					}
						 				if(data.locations['114952118516947']) { 
						 					totaltarget=totaltarget + data.targetlocations['114952118516947'].length;
						 					$('.sfcount').html(data.locations['114952118516947']);
						 					data.targetlocations['114952118516947'].forEach(function(entry) {
												    img="<img src='https://graph.facebook.com/"+entry+"/picture' class='pull-left img-rounded' />";
												    $('#sffriends').prepend(img);
												    
													targefriendsids.push(entry);
												});
						 					 } //sf
						 				if(data.locations['108424279189115']) {
						 					totaltarget=totaltarget + data.targetlocations['108424279189115'].length; 
						 					$('.nycount').html(data.locations['108424279189115']); 
						 					data.targetlocations['108424279189115'].forEach(function(entry) {
												    img="<img src='https://graph.facebook.com/"+entry+"/picture' class='pull-left img-rounded'  />";
												    $('#nyfriends').prepend(img);
												    targefriendsids.push(entry);
												});
						 					} //ny
						 				
						 					$('.totaltarget').html(totaltarget);
						 					$('#targefriendsids').val(targefriendsids);
						 					
						 					if(data.location['id'] === '110970792260960' ) {
											  
											  $('#lalock').fadeOut();
											  $('#launlock').fadeIn();
											
											}
											 
											if(data.location['id'] === '114952118516947' ) {
											  
											  $('#sflock').fadeOut();
											  $('#sfunlock').fadeIn();
											
											}
											
											if(data.location['id'] === '108424279189115' ) {
											  
											  $('#nylock').fadeOut();
											  $('#nyunlock').fadeIn();
											}  
										
						 				
						 				$('.name').html(data.first_name);
						 				$('.blueloader').height(50);
						 				$('.blueloader').attr('src', 'https://graph.facebook.com/'+data.id+'/picture');
						 				$('.loginrow').fadeOut(function(){
						 					$('.o').fadeIn();
						 				$('.userfbid').html(data.id);	
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