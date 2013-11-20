CREATE TABLE IF NOT EXISTS `peliculas` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `duracion` int(3) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
);

CREATE TABLE IF NOT EXISTS `series` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `capitulos` int(3) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
);

CREATE TABLE IF NOT EXISTS `capitulo_serie` (
  `cod_serie` int(11) NOT NULL AUTO_INCREMENT REFERENCES series(cod),
  `num_capitulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
);