<h1 class="text-center m-4">Cadastro de Grupos</h1>

	<!-- Formulário de Cadastro !-->
<form action="index.php?page=sal-grupos&acao=cadastrar" method="POST">

	<div class="container">
		<div class="row">
			<div class="form-group col-8">
				<label>Nome</label>
				<input type="text" name="nome_grupo" class="form-control">
			</div>
			<div class="form-group col-4">
				<label>Tipo</label>
				<input type="number" name="tipo_grupo" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-6">
				<label>Debut</label>
				<input type="date" name="debut_grupo" class="form-control">
			</div>
			<div class="form-group col-6">
				<label>Disband</label>
				<input type="date" name="disband_grupo" class="form-control">
			</div>
		</div>
		<div class="form-group">
				<button class="btn btn-outline-info btn-block" type="submit">Enviar</button>
		</div>
	</div>

</form>