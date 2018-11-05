<h1 class="text-center m-4">Lista de Gravadoras</h1>
<?php
	$sql = "SELECT * FROM gravadora";
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
				print "<th>#</th>";
				print "<th>Nome</th>";
				print "<th>Fundada em</th>";
				print "<th>CEO</th>";
			print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
				print "<td>".$row["id_gravadora"]."</td>";
				print "<td>".$row["nome_gravadora"]."</td>";
				print "<td>".$row["fundacao_gravadora"]."</td>";
				print "<td>".$row["ceo_gravadora"]."</td>";
			print "</tr>";
		}
		print "</table>";
	}
	else{
		print "<br><div class='alert alert-danger'>Nenhum dado cadastrado!</div>";
	}
?>