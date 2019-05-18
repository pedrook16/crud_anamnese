<div class="form">
<h1>Nova Anamnese</h1>

<section class="content container-fluid">

	<form method="POST" action="<?php echo BASE_URL; ?>home/add_action">
		<div class="box">			
			<div class="box-header">
				<div class="form-group">
					<label for="dor">Nova Anamnese</label>
					<input type="text" class="form-control" id="dor" name="anamnese" />
                </div>
					<div class="box-body">
						<label for="yes">Sim</label>
						<input type="radio" name="response" value="true" id="yes">
						<label for="no">Não</label>
						<input type="radio" name="response" value="false" id="no" > 
						<div class="box-tools">
						<button class="btn btn-success">Salvar</button>
					</div>
				</div>

			</div>
		</div>
	</form>

</section>
</div>