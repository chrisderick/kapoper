<!DOCTYPE hmtl>
<html>

<head>
	<style>
		body{
			background: url(img/loonaicecream.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		
		}
	</style>
</head>

<body>
	<h1 class="text-center m-4">Cadastro de Idols</h1>

		<!-- Formulário de Cadastro !-->
	<form action="index.php?page=sal-idol&acao=cadastrar" method="POST">

		<div class="container">
			<div class="row">
				<div class="form-group col-7">
					<label>Nome</label>
					<input type="text" name="nome_idol" class="form-control">
				</div>
				<div class="form-group col-2">
					<label>Sexo</label>
					<select name="sexo_idol" class="form-control">
						<option value="1">Masculino</option>
						<option value="0">Feminino</option>
					</select>
				</div>
				<div class="form-group col-3">
					<label>Data de Nascimento</label>
					<input type="date" name="nasc_idol" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-6 mx-auto">
				<div class="form-group">
					<label>Grupo</label>
					<?php
						$query = "SELECT id_grupo,nome_grupo FROM grupo";
						$res = mysqli_query($conn, $query);

						$op = "<select class='form-control' name='grupo_id_grupo'>";

						while ($row_grupo = mysqli_fetch_assoc($res)){
							@$op .= "<option value = '{$row_grupo ['id_grupo']}'>{$row_grupo ['nome_grupo']}</option>";
						}

						$op .= "</select>";
						echo $op;
					?>
				</div>
			</div>

			<div class="col-6 mx-auto">
				<div class="form-group">
					<label>Gravadora</label>
					<?php
						$query = "SELECT id_gravadora,nome_gravadora FROM gravadora";
						$res = mysqli_query($conn, $query);

						$op = "<select class='form-control' name='gravadora_id_gravadora'>";

						while ($row_gravadora = mysqli_fetch_assoc($res)){
							@$op .= "<option value = '{$row_gravadora ['id_gravadora']}'>{$row_gravadora ['nome_gravadora']}</option>";
						}
						$op .= "</select>";

						echo $op;
					?>
				</div>
			 </div>
			</div>

			<div class="row">
				<div class="form-group col-10">
					<label>Posição</label>
					<input type="text" name="posicao_idol" class="form-control">
				</div>
			
				<div class="form-group col-2 ">
					<p>É artista solo? &nbsp;</p>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" name="solo_idol" class="form-check-input" value="1">Sim
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" name="solo_idol" class="form-check-input" value="0">Não
					</label>
				</div>
				</div>
			</div>

			<div class="form-group">
					<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
			</div>
		</div>

	</form>
</body>

</html>

