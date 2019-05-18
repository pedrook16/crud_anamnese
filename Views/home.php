<div class="container">
<div class="box">
    <div class="box-header">     
      <div class="box-tools">
        <a href="<?php echo BASE_URL.'add'; ?>" class="btn btn-success">Adicionar</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table">
        <tr>
          <th>Código</th>
          <th>Anamnese</th>
          <th>Resposta</th>
          <th width="130">Ações</th>
        </tr>
        	<tr>
        		<td>1</td>
                <td>Tenho</td>
                <td>sim</td>
        		<td>
        			<div class="btn-group">
                <a href="<?php echo BASE_URL.'view'; ?>" class="btn btn-xs btn-primary"><i class="fas fa-binoculars"></i></a>
                <a href="<?php echo BASE_URL.'edit'; ?>" class="btn btn-xs btn-warning"><i class="far fa-edit"></i></a>
                <a href="<?php echo BASE_URL.'trash'; ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
				    	</div>
        		</td>
        	</tr>
      

      </table>

</div>