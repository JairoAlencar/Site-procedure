<?php
$con = mysqli_connect("localhost", "root", "", "venda_loja");
    if(isset($_POST["vai"])){
        $sql = "CALL sp_cadastro_de_cliente(NULL, '".$_POST["rg"]."', '".$_POST["nome"]."')";
        if (mysqli_query($con, $sql)){
            header ("location:cliente.php?inserted=1");
        }
    }
    if(isset($_GET["inserted"])){
        echo '<script>alert("data inserted")</script>';
    }
?>

<form action="" method="POST">
	<h2>Cadastro Cliente</h2>
	<span>Nome:<span>
<br>
		<input type="text" name="nome" placeholder="Ex: Cleide">
<br>
	<span>RG:</span>
<br>	
		<input type="text" name="rg" maxlength="10" placeholder="Ex: 357166048">
<br>
<br>
	<input type="submit" name="vai" value="Enviar">	
</form>

<h2>Lista de Clientes</h2>
<?php if(!empty($clientes)){ ?>
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
			<td> <a href=" ">Deletar</a> </td>
			<td> <a href=" ">Editar</a> </td>
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