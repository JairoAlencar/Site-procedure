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
END
--DELIMITER;

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
CREATE PROCEDURE sp_deletar_cliente(v_idCliente INT(10))
BEGIN
	DELETE FROM cliente WHERE IDCliente = v_idCliente;
END $$
DELIMITER ;

--Editar

DROP PROCEDURE IF EXISTS sp_editar_cliente;

DELIMITER $$
CREATE PROCEDURE sp_editar_cliente(rg INT(10), nome VARCHAR(100), v_idCliente INT(10))
BEGIN
	UPDATE cliente SET rg = rg, nome = nome  WHERE IDCliente = v_idCliente; 	
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
--DELIMITER ;

--Listar
DROP PROCEDURE IF EXISTS sp_listar_produto;

DELIMITER $$
CREATE PROCEDURE sp_listar_produto()
BEGIN
    SELECT * FROM produto ORDER BY codProduto ASC;
END $$
--DELIMITER ;

--Deletar 
DROP PROCEDURE IF EXISTS sp_deletar_produto;

DELIMITER $$
CREATE PROCEDURE sp_deletar_produto(v_codProduto INT(10))
BEGIN
    DELETE FROM produto WHERE codProduto = v_codProduto;
END $$
--DELIMITER ;

--Editar
DROP PROCEDURE IF EXISTS sp_editar_produto;

DELIMITER $$
CREATE PROCEDURE sp_editar_produto(descricao VARCHAR(45), quantidade INT(10), v_codProduto INT(10))
BEGIN
    UPDATE produto SET descricao = descricao, quantidade = quantidade WHERE codProduto = v_codProduto;
END $$
--DELIMITER ;


--Venda

-- Adicionar
DROP PROCEDURE IF EXISTS sp_addVenda;

DELIMITER $$
CREATE PROCEDURE sp_addVenda (idUsuario INT, dataVenda DATE)
BEGIN
        INSERT INTO venda(codVenda, idCliente, dataVenda) VALUES (NULL, idUsuario, dataVenda);
END $$
--DELIMITER ;

--Listar

DROP PROCEDURE IF EXISTS sp_listar_venda;

DELIMITER $$
CREATE PROCEDURE sp_listar_venda()
BEGIN
        SELECT * FROM venda ORDER BY dataVenda ASC;
END $$
--DELIMITER ;

-- Item venda

-- Adicionar
DROP PROCEDURE IF EXISTS sp_adicionar_ItemVenda;

DELIMITER $$
CREATE PROCEDURE sp_adicionar_ItemVenda (codVenda INT, codProduto INT, quantidade INT)
BEGIN
        INSERT INTO itemVenda(codvenda, codproduto, quantidade) VALUES (codVenda, codProduto, quantidade);
    END; $$
--DELIMITER ;

-- Deletar
DROP PROCEDURE IF EXISTS sp_deletar_ItemVenda;

DELIMITER $$
CREATE PROCEDURE sp_deletar_ItemVenda(codVenda INT, codProduto INT)
BEGIN
    DELETE FROM itemvenda WHERE codVenda = codVenda AND codProduto = codProduto;
END; $$
--DELIMITER ;

--Listar

DROP PROCEDURE IF EXISTS sp_listar_ItemVenda;

DELIMITER $$
CREATE PROCEDURE sp_listar_ItemVenda()
BEGIN
        SELECT * FROM itemvenda ORDER BY codProduto ASC;
END $$
DELIMITER ;