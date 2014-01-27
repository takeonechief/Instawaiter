<?php


 function getneighberhood($id) {
 	$neig = false ;
	$sql="select * from neig where resultcount=99 limit 30";
	include 'dbcon.php';
	$result = mysql_query($sql);
		mysql_close();
		while($row = mysql_fetch_array( $result )) {
			$neig[]['name'] = $row['name'] ;
		}
 	return $neig;
 } 
 
 function update ($name, $count) {
 		
 	include 'dbcon.php';
	
	
	
	$sql="update neig set resultcount = $count where name= '$name' ";
	
	$result = mysql_query($sql);
	mysql_close();
	 return $result ;
 }
 
 function info ($neig) {
 	$neig=urlencode($neig);
	$infourl="http://instawaiter.com/poll/phpyelp/example.php?type=1&city=".$neig;
	//$infourl="https://graph.facebook.com/me?access_token=".$access_token;
	$c = curl_init();
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_URL, $infourl);
	$contents = curl_exec($c);
	$err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
	curl_close($c);
	$info=json_decode($contents, TRUE);	
	return $info ;
 }
 
 
  function d($d){
        echo '<pre style="font-size:50%;color:red;">';
        print_r($d);
        echo '</pre>';
    }
  
  //d(getneighberhood(114952118516947)) ;
  $all = getneighberhood() ;
  foreach ($all as $single) {
  	
	d($single['name']);
	$result =  info($single['name']) ;
	 
	d($result['total']) ; 
	
	$done=update ($single['name'], $result['total']) ;  
    d($done);
  }
  
  
  
  ?>
