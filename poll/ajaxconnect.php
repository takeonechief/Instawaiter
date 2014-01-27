<?php

$at=$_POST['at'];
 
 function d($d){
        echo '<pre style="font-size:50%;color:red;">';
        print_r($d);
        echo '</pre>';
    }

 function getcity ($idcity) {
		
	$infourl="https://graph.facebook.com/".$idcity;
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


 function getneighberhood($id) {
 	$neig = false ;
	$sql="select * from neig where idcity=$id";
	include 'dbcon.php';
	$result = mysql_query($sql);
		mysql_close();
		while($row = mysql_fetch_array( $result )) {
			$neig[]['name'] = $row['name'] ;
		}
 	return $neig;
 } 

 function getfriends ($access_token) {
 	$infourl="https://graph.facebook.com/me/friends?fields=id,name,location&access_token=".$access_token;
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

 function atgetuserinfo ($access_token) {
		
	$infourl="https://graph.facebook.com/me?access_token=".$access_token;
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
 
  function checkexistantfb ($id){
 	$sql = "select idfb from _naturebox_users where idfb='$id' limit 1";
 	include('dbcon.php');
 	$result = mysql_query($sql);
 	mysql_close();
 	if($row = mysql_fetch_array( $result )) {
 		return true;
	} else {
		return false ;
	} 
 }
  
  function registeruser($idfb,$fname,$lname,$email) {
 	
	include('dbcon.php');
	$result=mysql_query("INSERT INTO _naturebox_users (idfb,fname,lname,email) 
				VALUES('$idfb','$fname','$lname','$email') ") ;
				mysql_close();
				
				return $result;
             
 }
  
  
  
  


if (isset($at)) {
		
	$info = atgetuserinfo ($at);
	
	//if(!checkexistantfb ($info['id'])) {
	//	registeruser($info['id'],$info['first_name'],$info['last_name'],$info['email']);
	//}
	
	if(isset($info['location']['id'])) {
		$idcity = $info['location']['id'];	
		$city=getcity ($idcity);
		$info['city_details'] = $city;
		$neig=getneighberhood($idcity);
		$info['neig']= $neig ; 
	}
	
	$main_cit = array("114952118516947", "108424279189115", "110970792260960");
	//if(!isset($info['location']['id']) or (!in_array($info['location']['id'], $main_cit)) ) {
			
		$friends = getfriends($at) ;
		//$info['friends'] = $friends ;
		
		foreach ($friends['data'] as $friend) {
			if(isset($friend['location']['id']) and (in_array($friend['location']['id'], $main_cit)) ) {
				$locations[] = $friend['location']['id'];
				$targetlocations[$friend['location']['id']][]=$friend['id']	;
			}	
		}
		$info['targetlocations']= $targetlocations ;
		$info['locations'] = array_count_values($locations);
		
	//}
	
	
	
	echo (json_encode($info));
}



?>