<!DOCTYPE HTML>
<html>
<head>
	<title>Prueba de Sitio</title>
	<link rel="stylesheet" href="font-icon/css/fontello.css">
    <!--<link rel="stylesheet" href="font-icon/css/animation.css">-->
    <link rel="stylesheet" href="style1.css">
</head>
<body>
	<div id="visible">
		<nav>
			<ul>
				<li><a href="#home" title="A" class="active"><span class="icon-home"></span></a></li>
				<li><a href="#home" title="B"><span class="icon-doc"></span></a></li>
				<li><a href="#home" title="C"><span class="icon-search"></span></a></li>
				<li><a href="#home" title="D"><span class="icon-vcard"></span></a></li>
			</ul>
		</nav>
		<div class="clear"></div>
		<header>
			<h1>
				<a href="#">
					<span>Bit</span>
					<span>Web</span>
					<span>Dev</span>
				</a>
			</h1>
		</header><!-- /header -->
		<div id="content">
			<div id="left">
				<div id="posts">
					<?php for($i=0;$i<5;$i++){
						include("post.php");
					}?>
				</div>
				<div id="pagination">
					<a href="#" title="">1</a>
					<a href="#" title="">2</a>
					<a href="#" title="">3</a>
					<a href="#" title="">4</a>
				</div>
			</div>
			<div id="right">
				<div id="categories">
					<h3>Categorias</h3>
					<ul>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">MongoDB</a></li>
						<li><a href="#" title="">MySQL</a></li>
						<li><a href="#" title="">PHP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<footer>
			<div>
				Algunas cosas que s&eacute; sobre desarrollo web.
			</div>
		</footer>
	</div>	
	<div id="hidden"></div>
</body>
</html>	
