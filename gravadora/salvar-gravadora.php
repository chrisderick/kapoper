<?php

	$nome = @$_REQUEST["nome_gravadora"];
	$fund = @$_REQUEST["fundacao_gravadora"];
	$ceo = @$_REQUEST["ceo_gravadora"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO gravadora (nome_gravadora, fundacao_gravadora, ceo_gravadora) VALUES ('$nome','$fund','$ceo')";
			$res = $conn->query($sql);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar!</div>";
			}
		break;
		
		case "editar":
			# code...
		break;

		case "excluir":
			# code...
		break;

		default:
			# code...
		break;
	}

?>