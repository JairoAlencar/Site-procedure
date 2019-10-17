--Cliente

--Adicionar
DROP PROCEDURE IF EXISTS sp_cadastro_de_cliente;

DELIMITER $$
CREATE PROCEDURE sp_cadastro_de_cliente(rg INT(10), nome VARCHAR(100))
BEGIN
	IF (rg>0) THEN
      INSERT INTO  cliente(idCliente, rg, nome) 
        VALUES (null, rg, nome);
    ELSE
    	SELECT 'Todos os campos devem ser fornecidos no cadastro!' AS msg;
    END IF;
END $$
DELIMITER ;

--Listar
DROP PROCEDURE IF EXISTS sp_listar_cliente;

DELIMITER $$
CREATE PROCEDURE sp_listar_cliente()
BEGIN
	SELECT * FROM cliente ORDER BY nome ASC;
END $$
DELIMITER ;	

--Deletar

DROP PROCEDURE IF EXISTS sp_deletar_cliente;

DELIMITER $$
CREATE PROCEDURE sp_deletar_cliente(idCliente INT(10))
BEGIN
	DELETE FROM cliente WHERE idCliente = idCliente;
END $$
DELIMITER ;

--Editar

DROP PROCEDURE IF EXISTS sp_editar_cliente;

DELIMITER $$
CREATE PROCEDURE sp_editar_cliente(rg INT(10), nome VARCHAR(100), IDCliente INT(10))
BEGIN
	UPDATE cliente SET rg = rg, nome = nome WHERE IDCliente = idCliente; 	
END $$
DELIMITER $$

--Produto

--Adicionar
DROP PROCEDURE IF EXISTS sp_cadastro_produto;

DELIMITER $$
CREATE PROCEDURE sp_cadastro_produto(descricao VARCHAR(45), quantidade INT(10))
BEGIN
	IF (quantidade>0) AND (descricao !="") THEN
      INSERT INTO  produto (codProduto, descricao, quantidade) 
        VALUES (null, descricao, quantidade);
    ELSE
    	SELECT 'Todos os campos devem ser fornecidos no cadastro!' AS msg;
    END IF;
END $$
DELIMITER ;

--Listar
DROP PROCEDURE IF EXISTS sp_listar_produto;

DELIMITER $$
CREATE PROCEDURE sp_listar_produto()
BEGIN
    SELECT * FROM produto ORDER BY codProduto ASC;
END $$
DELIMITER ;

--Deletar 
DROP PROCEDURE IF EXISTS sp_deletar_produto;

DELIMITER $$
CREATE PROCEDURE sp_deletar_produto(codProduto INT(10))
BEGIN
    DELETE FROM produto WHERE codProduto = codProduto;
END $$
DELIMITER ;

--Editar
DROP PROCEDURE IF EXISTS sp_editar_produto;

DELIMITER $$
CREATE PROCEDURE sp_editar_produto(descricao VARCHAR(45), quantidade INT(10))
BEGIN
    UPDATE produto SET descricao = descricao, quant = quant WHERE codProduto = codProduto;
END $$
DELIMITER ;

--TRIGGERs

