<h2>Lista de Clientes</h2>
<?php 
	if(!empty($clientes)){ 
?>
	<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>RG</th>
				<th>Deletar</th>
				<th>Editar</th>
			</tr>
		</thead>

        <?php 
            foreach($clientes as $cliente):
        ?>
		<tr>
			<td><?= $cliente['idCliente']?></td>
			<td><?= $cliente['nome']?></td>
            <td> <?= $cliente['rg']?>
			<td> <a href="./cliente/deletar/<?=$cliente['idCliente']?>">Deletar</a> </td>
			<td> <a href="./cliente/editar/<?=$cliente['idCliente']?>">Editar</a> </td>
                        ?>
                </tr>
        <?php 
            endforeach;
			}else{
		?>	
				<h5 class="text-center" style="color: black;">Nenhum cliente cadastrado</h5>
		<?php
			}
		?>		
</TABLE>