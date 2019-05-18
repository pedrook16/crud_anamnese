<div class="container">
<div class="box">
    <div class="box-header"> 
    <h1>Listagem de Anamneses</h1>    
      <div class="box-tools">
        <a href="<?php echo BASE_URL; ?>home/add" class="btn btn-success">Adicionar</a>
      </div>
    </div>
    <div class="box-body">
      <table class="table">
        <tr>
          <th>Código</th>
          <th>Anamnese</th>
          <th>Resposta</th>
          <th>Ações</th>
        </tr>
        
        <?php foreach($list as $item): ?>
          <tr>
        		    <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['anamnese']; ?></td>
                <td><?php echo $item['response'] == 1 ? 'Sim' : 'Não'; ?></td>
        		<td>
            
        			<div class="btn-group">
                <a href="<?php echo BASE_URL?>home/view/<?php echo $item['id']; ?>" class="btn btn-xs btn-primary"><i class="fas fa-binoculars"></i></a>
                <a href="<?php echo BASE_URL?>home/edit/<?php echo $item['id']; ?>" class="btn btn-xs btn-warning"><i class="far fa-edit"></i></a>
                <a href="<?php echo BASE_URL?>home/del/<?php echo $item['id']; ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
				    	</div>
        		</td>
        	</tr>
            <?php endforeach; ?>
      

      </table>

</div>