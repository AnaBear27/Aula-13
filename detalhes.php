<!DOCTYPE html>
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
							$idpro=$_REQUEST["idpro"];
							$queryPro = $PDO->prepare("SELECT c.idcat, c.carrinho, p.idpro, p.descricaopro, p.precopro
							FROM tbcarrinho c,tbprodutos p
							WHERE c.idcat=p.idcat
							AND p.idpro='$idpro'") OR DIE("Erro na Query");
							$queryPro->execute();
							$resPro=$queryPro->fetchAll(PDO::FETCH_ASSOC);
							foreach($resPro as $p){
								echo "<div style='width:1000px; height:500px; margin:10px auto;'>";
								echo "<img src='administrador/produtos/$p[idpro].jpg' width='150px'/>";
								echo "<p class='formatatexto'>$p[descricaopro]</p>";
								echo "<p class='formatamoeda'>R$ $p[precopro]</p>";
								echo "<p class='formatatexto'>
								<input type='number' value='1' min='1' max='5' name='quant'/>
								</p>";
								echo "<p><input type='submit' value='Adicionar' class='formataAdd' name='acao'/></p>";
						?>
					</div>
				</section>
		</section>
	
</body>
</html>

