<h2>Lista de Item Vendas</h2>
<?php 
	if(!empty($itemvenda)){ 
?>
	<TABLE class="table">
		<thead>
			<tr>
				<th>Cod Venda</th>
				<th>Cod Prodtuo</th>
				<th>Quantidade</th>
				<th>Deletar</th>
				<th>Editar</th>
			</tr>
		</thead>

        <?php 
            foreach($itemvenda as $itv):
        ?>
		<tr>
			<td><?= $itv['codvenda']?></td>
			<td><?= $itv['codproduto']?></td>
            <td> <?= $itv['quantidade']?></td>
         </tr>
        <?php 
            endforeach;
			}else{
		?>	
				<h5 class="text-center" style="color: black;">Nenhum item vendido</h5>
		<?php
			}
		?>		
</TABLE>