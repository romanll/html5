<?php
	$result=Array();  /* <= resultados  a retornar */
	$url=$_POST['enlace'];
	$contURL=file_get_contents($url);
	$contURL=mb_convert_encoding($contURL, 'HTML-ENTITIES', "UTF-8");
	echo utf8_decode($contURL);
	//echo $url;
	/* Probar con 'OpenGraph' */
	$ogr=preg_match_all('~<\s*meta\s+property="(og:[^"]+)"\s+content="([^"]*)"\s*/*>~i',$contURL,$matches);
	//print_r($matches);
	//echo '<pre>';print_r($matches);echo '</pre>';
	for($i=0;$i<count($matches[0]);$i++){
		$currentK=substr($matches[1][$i],3);
		$currentV=$matches[2][$i];
		$ogTags[$currentK]=$currentV;
	}
	//print_r($ogTags);
	//ver si tenemos 'titulo, desccripcion e imagen'
	if(isset($ogTags)){
		//si encuentro 'title' en 'og:', tomar este.
		if(isset($ogTags['title'])){
			$result['titulo']=$ogTags['title'];
		}
		//si no se encuentra, tomar '<title>'
		else{
			$a=preg_match_all('~<title>(.*?)</title>~i', $contURL,$matches);
			if($matches){$result['titulo']=utf8_decode($matches[1][0]);}
		}
		//dar prioridad a 'og:description'
		if(isset($ogTags['description'])){
			$result['descripcion']=$ogTags['description'];
		}
		//u obtener de '<meta>''
		else{
			$metas=get_meta_tags($url);
			$result['descripcion']=utf8_encode($metas['description']);
		}
		//e imagen de 'og:'
		if(isset($ogTags['image'])){
			$result['imagen']=$ogTags['image'];
		}
	}
	else{
		//<meta> y <title>
		$a=preg_match_all('~<title>(.*?)</title>~i', $contURL,$matches);
		print_r($matches);
		if($matches){
			$titulo=$matches[1][0];
			//$titulo=html_entity_decode($matches[1][0],ENT_QUOTES);
			//$titulo=htmlspecialchars_decode($matches[1][0]);
			//$titulo=utf8_decode($matches[1][0]);
			////$titulo=htmlspecialchars($matches[1][0]);
			//$titulo=utf8_encode($titulo);
			$result['titulo']=$titulo;
		}
		$metas=get_meta_tags($url);
		//if($metas){$result['descripcion']=utf8_encode($metas['description']);}
		if($metas){$result['descripcion']=htmlspecialchars($metas['description']);}
	}
	echo json_encode($result);

?>