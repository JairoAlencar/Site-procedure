--Cliente

--Adicionar
DDROP PROCEDURE IF EXISTS sp_cadastro_de_cliente;

DELIMITER $$
CREATE PROCEDURE sp_cadastro_de_cliente(v_rg INT(10), v_nome VARCHAR(100))
BEGIN
	IF (rg>0) THEN
      INSERT INTO  cliente(idCliente, rg, nome) 
        VALUES (null, v_rg, v_nome);
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
CREATE PROCEDURE sp_deletar_cliente(v_idCliente INT(10))
BEGIN
	DELETE FROM cliente WHERE idCliente = $v_idCliente;
END $$
DELIMITER ;

--Editar

DROP PROCEDURE IF EXISTS sp_editar_cliente;

DELIMITER $$
CREATE PROCEDURE sp_editar_cliente(v_idCliente INT(10), v_rg INT(10), v_nome VARCHAR(100))
BEGIN
	UPDATE cliente SET rg = v_rg, nome = v_nome WHERE idCliente = v_idCliente; 	
END $$
DELIMITER $$
