<?php
	include("administrador/inc/conexao.php");
	include("configs/config.ini.php");
?>
<html>
<head>
<meta charset="UTF-8" />
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/efeitos.js"></script>
</head>

<body>
	<section id="container">
		<header id="header">
			<div id="logo">
				<figure>
					<img src=""/>
				</figure>
				
				<nav id="nav">
					<?php
						include("menu.php");
					?>
				</nav>
			</div>
		</header>
		
		<section id="contentprodutos">
			<div>
				<?php
					include("produtos.php"); //conexão com o php e html.
				?>
			</div>
		</section>
	</section>
</body>
</html>