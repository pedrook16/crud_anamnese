<div class="form">
<h1>Editar Anamnese</h1>

<section class="content container-fluid">
	<form method="POST">
		<div class="box">			
			<div class="box-header">
				<div class="form-group">
					<label for="dor">Editar Anamnese</label>
					<input type="text" class="form-control" id="dor" name="anamnese" value="<?php echo $info['anamnese']; ?>"/>
                </div>
				<div class="box-body">
					<label for="yes">Sim</label>
					<input type="radio" name="response" <?php echo $info['response'] == '1' ? 'checked' : ''; ?> value="true" id="yes">
					<label for="no">Não</label>
					<input type="radio" name="response" <?php echo $info['response'] == '0' ? 'checked' : ''; ?> value="false" id="no" >  
				<div class="box-tools">
					<button class="btn btn-success">Salvar</button>
				</div>
			</div>
		</div>
	</form>
</section>
</div>
