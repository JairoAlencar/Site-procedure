<h2>Lista de produtos</h2>
<?php 
	if(!empty($produtos)){ 
?>

	<TABLE class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Descrição</th>
				<th>Quantidade</th>
				<th>Deletar</th>
				<th>Editar</th>
			</tr>
		</thead>

        <?php 
            foreach($produtos as $produto):
        ?>
		<tr>
			<td> <?= $produto['codProduto'] ?> </td>
			<td> <?= $produto['Descricao'] ?> </td>
            <td> <?= $produto['Quantidade'] ?> </td>
			<td> <a href="./produto/deletar/<?=$produto['codProduto']?>">Deletar</a> </td>
			<td> <a href="./produto/editar/<?=$produto['codProduto']?>">Editar</a> </td>
                </tr>
        <?php 
            endforeach;
			}else{
		?>	
				<h5 class="text-center" style="color: black;">Nenhum produto cadastrado</h5>
		<?php
			}
		?>		
</TABLE>