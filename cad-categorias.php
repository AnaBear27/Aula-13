<?php
	include("inc/conexao.php");
	include("configs/config.ini.php");
	@$textoBotao="Cadastrar";
	@$smarty->assign("textoBotao",$textoBotao);
	@$acao=$_RESQUEST["acao"];
	@$categoria=$_POST["categoria"];
	@$linkcateg=$_POST["linkcateg"];
	
	//CADASTRAR categoria
	if($acao=="Cadastrar"){
		$queryCat = "INSERT INTO tbcarrinho (categoria, linkcateg) VALEUS (?,?)";
		$PDO->prepare($queryCat)->execute([$categoria, $linkcateg]);
		echo "<cript>alert('Categoria Cadastrada');document.location='cad-categoria.php;</script;">;
	}
	
	$queryGeral = $PDO->prepare("SELECT * FROM tbcarrinho") OR DIE("Erro ao Consultar Categorias");
	$queryGeral->execute();
	$respQueryGeral=$queryGeral->fetchAll(PDO::FETCH_ASSOC);
	$smarty->assign("minhasCategorias",$respQueryGeral);
	
	$smarty->display("cad-categoria.html");
	
?>