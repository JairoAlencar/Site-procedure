<?php
$con = mysqli_connect("localhost", "root", "", "venda_loja");
    if(isset($_POST["vai"])){
        $sql = "CALL sp_cadastro_de_produto(NULL, '".$_POST["desc"]."', '".$_POST["quant"]."')";
        if (mysqli_query($con, $sql)){
            header ("location:cliente.php?inserted=1"); //nn entendi, tem que mudar conforme o produto
        }
    }
    if(isset($_GET["inserted"])){
        echo '<script>alert("data inserted")</script>';
    }
?>

<form action="" method="POST">
	<h2>Cadastro Produto</h2>
	<span>Descrição:<span>
<br>
		<input type="text" name="desc" placeholder="Ex: blablablabla">
<br>
	<span>Quantidade:</span>
<br>	
		<input type="number" name="quant" maxlength="10" placeholder="Ex: 50">
<br>
<br>
	<input type="submit" name="Vai" value="Enviar">	
</form>

<h2>Lista de produtos</h2>
<?php if(!empty($produtos)){ ?>
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
			<td><?= $produto['codProduto']?></td>
			<td><?= $produto['desc']?></td>
            <td> <?= $produto['quant']?>
			<td> <a href=" ">Deletar</a> </td>
			<td> <a href=" ">Editar</a> </td>
                        ?>
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