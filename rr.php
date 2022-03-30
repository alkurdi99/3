<?php 

/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/
error_reporting(0);

system("clear");

function banner(){
	echo <<<EOD
\e[33;2m
   
╔═══╦╗─╔╦═══╦═══╦╗╔═╗─╔╗─╔╦═══╗╔╗──╔╦═══╗
║╔═╗║║─║║╔══╣╔═╗║║║╔╝─║║─║║╔═╗║║╚╗╔╝║╔══╝
║║─╚╣╚═╝║╚══╣║─╚╣╚╝╝──║║─║║╚═╝║╚╗║║╔╣╚══╗
║║─╔╣╔═╗║╔══╣║─╔╣╔╗╠══╣║─║║╔══╝─║╚╝║╚══╗║
║╚═╝║║─║║╚══╣╚═╝║║║╚╦═╣╚═╝║║────╚╗╔╝╔══╝║
╚═══╩╝─╚╩═══╩═══╩╝╚═╝─╚═══╩╝─────╚╝─╚═══╝

\033[1;93m < \033[1;92mTHE SCRIPT INSTAUP  V5 ⚡️\033[1;93m >  \033[1;91m
 ---------------------------
 \033[1;91m(\033[1;92m⌯\033[1;91m) \033[1;97mAUTHOR     : SIDRA ELEZZ
 \033[1;91m(\033[1;92m⌯\033[1;91m) \033[1;97mTelegram   : SIDRATOOLS
 \033[1;91m(\033[1;92m⌯\033[1;91m) \033[1;97mYOUTUBE    : TERMUX TOOLS
 \033[1;91m(\033[1;92m⌯\033[1;91m) \033[1;97mGITHUB     : GITHUB.COM/SIDRAELEZZ\033[1;91m
  ---------------------------\n
EOD;
}


function Sidra($length){
	$str="";
	for($a=0;$a<$length;$a++){
		$str.=mt_rand(0,9);
}
	return $str;
}

/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/

sleep(2);
banner();
$myid = readline(" \e[1;31m(\033[1;32m⌯\e[1;31m)\033[1;32m USER ID : \033[1;33m");
$fileid = readline(" \e[1;31m(\033[1;32m⌯\e[1;31m)\033[1;32m List ID : \033[1;33m");
$userid = fopen($fileid, "a+");
sleep(1);
print (" \033[1;31m ---------------------------\n");
sleep(1);
 while(! feof($userid))  {
    $id = fgets($userid);
    
    
$x1 = Sidra(2);
    
$x2 = Sidra(2);
    
$x3 = Sidra(2);
   
$x4 = Sidra(2);
    
$IP = $x1.'.'.$x2.'.'. $x3.'.'.$x4;
    
$us = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,16);
    
$ua = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,40);
    
$name = substr(str_shuffle('0987654321mnbvcxzasdfghjklpoiuytrewq'),1,7);
    
$tiame=time();
    
$url='https://instaup.marsapi.com/get_likes/user/coins';
    
$data ='market=Bazaar&user_id='.$id.'&iad='.$ua.'&user_name='.$name;
    
$account=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$id);
    
$headers=[
     
'market: Bazaar',
     
'access: '.$account,
     
'lng: en',
     
'api_key: ABCXYZ123TEST',
     
"Nagent: null/02:00:00:00:00:00/'.$tiame.'/$us/null/$ua",
     
'cnt: unknown',
     
'version: 51',
     
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
     
'aid: '.$ua,
     
'Content-Type: application/x-www-form-urlencoded',
     
'Host: instaup.marsapi.com',
     
'Connection: Keep-Alive',
     
'Accept-Encoding: gzip',
     
'User-Agent: okhttp/3.12.1',
     
'X-Forwarded-For: '.$IP.''];

/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/
    
$ch = curl_init();
    
curl_setopt($ch, CURLOPT_URL,$url);
    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
curl_setopt($ch, CURLOPT_POST, 1);
    
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
    
$response = curl_exec ($ch);

print ($response);

curl_close ($ch);

/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/

if(strpos($response,'"coins"')){
	
	$result = json_decode($response,true);
	$coins = $result["coins"];
	$order = $coins / 4;
	$orders = explode(".",$order)['0'];
	print("\033[1;33m CHECK COIN\033[1;37m ==> \033[1;32m".$coins."\n");
	print ("");
	sleep (40);
	if($coins > 1000){ 
		print("\033[1;32m SUCCESSFUL COIN\033[1;37m ==> \033[1;32m".$coins."\n");
		print ("");
		$respons =  json_decode(file_get_contents("https://script-new-instaup.herokuapp.com/?target=".$id."&userid=".$myid."&order=".$orders),true);
		$error = $respons["message"];
		$good = $respons['status'];
		if($good == 'Successful'){
			print("\033[1;32m SUCCESSFUL SEND FOLLOWERS\033[1;37m ==> \033[1;32m".$orders."\n");
			print ("");
			sleep (5);
			
		} elseif($error == 'There is a problem registering the order. Contact support'){
			print("\033[1;37m Wait To Completed Old Orderr \n");
			print ("");
			sleep (5);
			
		} else {
			print("\033[1;37m DONT SEND FOLLOWERS \n");
			print ("");
			sleep (5);}
			
/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/
		
	} elseif($coins > 800){ 
		print("\033[1;32m SUCCESSFUL COIN\033[1;37m ==> \033[1;32m".$coins."\n");
		print ("");
		$respons =  json_decode(file_get_contents("https://script-new-instaup.herokuapp.com/?target=".$id."&userid=".$myid."&order=".$orders),true);
		$error = $respons["message"];
		$good = $respons['status'];
		if($good == 'Successful'){
			print("\033[1;32m SUCCESSFUL SEND FOLLOWERS\033[1;37m ==> \033[1;32m".$orders."\n");
			print ("");
			sleep (5);
			
		} elseif($error == 'There is a problem registering the order. Contact support'){
			print("\033[1;37m Wait To Completed Old Orderr \n");
			print ("");
			sleep (5);
			
		} else {
			print("\033[1;37m DONT SEND FOLLOWERS \n");
			print ("");
			sleep (5);}
			
/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/

	} elseif($coins > 400){ 
		print("\033[1;32m SUCCESSFUL COIN\033[1;37m ==> \033[1;32m".$coins."\n");
		print ("");
		$respons =  json_decode(file_get_contents("https://script-new-instaup.herokuapp.com/?target=".$id."&userid=".$myid."&order=".$orders),true);
		$error = $respons["message"];
		$good = $respons['status'];
		if($good == 'Successful'){
			print("\033[1;32m SUCCESSFUL SEND FOLLOWERS\033[1;37m ==> \033[1;32m".$orders."\n");
			print ("");
			sleep (5);
			
		} elseif($error == 'There is a problem registering the order. Contact support'){
			print("\033[1;37m Wait To Completed Old Orderr \n");
			print ("");
			sleep (5);
			
		} else {
			print("\033[1;37m DONT SEND FOLLOWERS \n");
			print ("");
			sleep (5);}
		
/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/

	} elseif($coins > 100){ 
		print("\033[1;32m SUCCESSFUL COIN\033[1;37m ==> \033[1;32m".$coins."\n");
		print ("");
		$respons =  json_decode(file_get_contents("https://script-new-instaup.herokuapp.com/?target=".$id."&userid=".$myid."&order=".$orders),true);
		$error = $respons["message"];
		$good = $respons['status'];
		if($good == 'Successful'){
			print("\033[1;32m SUCCESSFUL SEND FOLLOWERS\033[1;37m ==> \033[1;32m".$orders."\n");
			print ("");
			sleep (5);
			
		} elseif($error == 'There is a problem registering the order. Contact support'){
			print("\033[1;37m Wait To Completed Old Orderr \n");
			print ("");
			sleep (5);
			
		} else {
			print("\033[1;37m DONT SEND FOLLOWERS \n");
			print ("");
			sleep (5);}
			
	} else {
		print("\033[1;32m SUCCESSFUL COIN\033[1;37m ==> \033[1;32m".$coins."\n");
		print ("");
		sleep (5);
			}
			
/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/

} elseif(strpos($response,'"@gmail.com"')){
	
	print("\e[1;37m IP address block Wait 30 Minutes \n");
	print ("");
	sleep (300);
	

} else {
	print("\e[1;37m FALSE COIN \n");
	print ("");
	sleep (40);

}

}
/*
-------------------------------------------------------------------------
- Cod BY : SidraELEzz
- Github : https://github.com/SidraELEzz
- Telegram: https://t.me/SidraTools
- Telegram: https://t.me/tt_rq
-------------------------------------------------------------------------
*/
  fclose($userid);
?>
