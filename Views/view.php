<div class="form">
<h1>Visualizar Anamnese</h1>

<section class="content container-fluid">

	<form method="POST" action="<?php echo BASE_URL; ?>home">
		<div class="box">			
			<div class="box-header">
            <div class="box-tools">
					<button class="btn btn-info">Voltar</button>
				</div>
				<div class="form-group">
					<label for="dor">Anamnese</label>
					<input type="text" class="form-control" id="dor" name="anamnese" disabled value="<?php echo $info['anamnese']; ?>" />
                </div>
                <div class="box-body">
					<label for="yes">Sim</label>
					<input type="radio" disabled name="response" <? if($info['response'] == '1') echo "checked"; ?> value="true" id="yes">
					<label for="no">Não</label>
					<input type="radio" disabled name="response" <? if($info['response'] == '0') echo "checked"; ?> value="false" id="no" > 
			</div>
		</div>
	</form>

</section>
</div>