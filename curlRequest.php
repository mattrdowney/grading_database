<?php
function curlReq($url, $data)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type' => 'text/plain'));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	$result=curl_exec($ch);

	curl_close($ch);

	return $result;
}


function curlReqJxJ($url, $data)
{
	$encoded = json_encode($data);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type' => 'text/plain'));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);

	$result=curl_exec($ch);
	curl_close($ch);
	
	$decoded = json_decode($result);

	return $decoded;
}

?>