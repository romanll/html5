<?php
	//$contURL=@file_get_contents('http://www.sopitas.com/site/188421-28-buenas-razones-para-celebrar-el-cumpleanos-de-scarlett-johansson/');
	//echo $contURL;
	//$ogr=preg_match_all('~<\s*meta\s+property="(og:[^"]+)"\s+content="([^"]*)"\s*/*>~i',$contURL,$matches);
	//print_r($matches);
	//
	/*$c = curl_init('http://www.sopitas.com/site/');
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	$page = curl_exec($c);
	curl_close($c);
	echo $page;*/

	$contURL=@file_get_contents('http://youtu.be/L7GlP0NMKSo');
	$string = mb_convert_encoding($contURL, 'HTML-ENTITIES', "UTF-8");
	echo $string;
	//echo utf8_decode($string);

?>