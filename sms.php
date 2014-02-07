<?php
$url ='http://www.freesmsgateway.com/api_send';
$post_contacts=array('2699296548');
$json_contacts = json_encode($post_contacts);

$fields = array(
	'access_token'=>'44e92da2bbd4a2d09187d307db7126ab',
	'message'=>urlencode('test'),
	'send_to'=>'post_contacts',
	'post_contacts'=>urlencode($json_contacts),
);
$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&';}
rtrim($fields_string,'&');

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($ch);
curl_close($ch);
//print $result;

?>