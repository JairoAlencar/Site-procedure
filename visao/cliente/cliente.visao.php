<form action="" method="POST">

	<h2>Cadastro Cliente</h2>
	
	<span>Nome:<span>
<br>
		<input type="text" name="nome" placeholder="Ex: Cleide" value="<?= @$cliente['Nome'] ?>">
<br>
	<span>RG:</span>
<br>	
		<input type="text" name="rg" maxlength="10" placeholder="Ex: 357166048" value="<?= @$cliente['rg'] ?>">
<br>
<br>
	<input type="submit" name="vai" value="Enviar">	
</form>