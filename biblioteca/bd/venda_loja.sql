CREATE TABLE IF NOT EXISTS `cliente` (
  `IDCliente` int(10) NOT NULL AUTO_INCREMENT,
  `rg` INT(10) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`IDCliente`)
);

CREATE TABLE IF NOT EXISTS `produto` (
  `codProduto` int(10) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) NOT NULL,
  `Quantidade` INT(10) NOT NULL,
  PRIMARY KEY (`codProduto`)
);

CREATE TABLE IF NOT EXISTS `itemVenda` (
  `codvenda` int(10) NOT NULL,
  `codproduto` int(10) NOT NULL,
  `quantidade` int(10) NOT NULL,
  FOREIGN KEY (`codvenda`) REFERENCES pedido(`codvenda`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`codproduto`) REFERENCES produto(`codProduto`) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS `pedido` (
  `codvenda` int(10) NOT NULL AUTO_INCREMENT,
  `idCliente` int(10) NOT NULL,
  `DataVenda` DATE NOT NULL,
  PRIMARY KEY (`codvenda`),
  FOREIGN KEY (`IDCliente`) REFERENCES cliente(`IDCliente`) ON DELETE CASCADE ON UPDATE CASCADE
);