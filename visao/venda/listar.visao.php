<h2>Lista de Vendas</h2>
<?php 
	if(!empty($venda)){ 
?>
	<TABLE class="table">
		<thead>
			<tr>
				<th>Cod Venda</th>
				<th>ID Cliente</th>
				<th>Data venda</th>
			</tr>
		</thead>

        <?php 
            foreach($venda as $venda):
        ?>
		<tr>
			<td><?= $venda['codvenda']?></td>
			<td><?= $venda['idcliente']?></td>
            <td> <?= $venda['datavenda']?></td>
        </tr>
        <?php 
            endforeach;
			}else{
		?>	
				<h5 class="text-center" style="color: black;">Nenhum venda encontrada</h5>
		<?php
			}
		?>		
</TABLE>