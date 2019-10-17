<?php
$con = mysqli_connect("localhost", "root", "", "loja");
    if(isset($_POST["vai"])){
        $sql = "CALL sp_cadastro_de_cliente('1', '".$_POST["rg"]."', '".$_POST["nome"]."')";
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