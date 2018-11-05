<?php

	$nome = @$_REQUEST["nome_idol"];
	$sexo = @$_REQUEST["sexo_idol"];
	$nasc = @$_REQUEST["nasc_idol"];
	$grupo = @$_REQUEST["grupo_id_grupo"];
	$label = @$_REQUEST["gravadora_id_gravadora"];

	switch (@$_REQUEST["acao"]) {
		case "cadastrar":
			$sql = "INSERT INTO idol (nome_idol) VALUES ('$nome')";
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