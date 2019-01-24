<?php
   $pagina = isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 'home';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backhauser</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script src="js/jquery.js"></script>
	<script src="js/cycle.js"></script>


	<script>
	$(function(){
          $('#img_03').cycle({ 
    fx:    'fade', 
    pause:  10000
}) ; 
	});

	</script>

	

</head>
<body>

<div >
	<header id="topo">
		<div id="logo">
			<a href="?pagina=home"><img src="img/logo_web.png" alt="Logo TI74"></a>
		</div>
		
		<nav id="menu_1">
     <ul id="btn_menu_1">
        <li><a href="?pagina=quem_sou">QUEM SOMOS</a></li>
		<li><a href="?pagina=contato">CONTATOS</a></li>		
		<li><a href="?pagina=videos">VÍDEOS</a></li>
	</ul>

	</nav>
	
	</header>

	<?php include 'php_components/nav.php'; ?>