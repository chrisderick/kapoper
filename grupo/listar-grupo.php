<h1 class="text-center m-4">Lista de Grupos</h1>
<?php
	$sql = "SELECT * FROM grupo";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome</th>";
				print "<th>Tipo</th>";
				print "<th>Debut</th>";
				//colocar o disband;
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
				print "<td>".$row["id_grupo"]."</td>";
				print "<td>".$row["nome_grupo"]."</td>";
				if($row["tipo_grupo"] == 0){
                print "<td>Girl Group</td>";
				}elseif($row["tipo_grupo"] == 1){
                print "<td>Boy Group</td>";}
				elseif($row["tipo_grupo"] == 2){
                print "<td>Mixed Group</td>";}
				print "<td>".$row["debut_grupo"]."</td>";
				//colocar o disband;
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>