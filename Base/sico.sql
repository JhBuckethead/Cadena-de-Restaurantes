-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2015 a las 23:12:10
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Pizzeria'),
(2, 'Cafeteria'),
(3, 'Restaurant'),
(4, 'Eventos Sociales (alimentacion)'),
(5, 'Heladeria'),
(6, 'Marisqueria'),
(7, 'Licoreria'),
(8, 'Comida Rapida'),
(9, 'Comida Vegetariana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_factura` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detalle`,`id_producto`),
  KEY `fk_productos_idx` (`id_producto`),
  KEY `fk_facturas_idx` (`id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `url` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_empresa`,`id_categoria`),
  KEY `fk_categoria_idx` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `id_categoria`, `direccion`, `descripcion`, `url`, `estado`) VALUES
(1, 'Pescaderia El chinito2', 2, 'Loja1', 'Comida del mar a su plato', 'http://static.amarillasinternet.com/pictures/200000_300000/280000_290000/281000_282000/281300_281400/281305/banners/281305_a.jpg', 1),
(2, 'Topsy', 5, 'Loja', 'Helados en general.', 'http://www.loaizacomunicaciones.com.ec/_documentos/image/noticias/14/logo-topsy.png', 0),
(3, 'jo2', 2, '2', '2dasda', '222d2', 1),
(4, 'cccccklkkllklk', 5, 'aaaasssss', 'sssuouoo', 'sssslkllkll', 1),
(5, 'jjjj', 2, 'jjdsadsa', 'j', 'jjjjj', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `fk_persona_idx` (`id_persona`),
  KEY `persona_idx` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `num_cuenta` varchar(45) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id_persona`,`id_tipo`),
  KEY `fk_tipo_idx` (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `mail`, `sexo`, `cedula`, `fecha_nacimiento`, `telefono`, `direccion`, `num_cuenta`, `id_tipo`, `usuario`, `pass`) VALUES
(1, 'Pamela', 'pamela@gmail.com', 'Femenino', '1102235621', '2015-07-01', 98541236, 'Sauces', '115236524781', 1, 'pamela', 'pamela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `stock` int(45) DEFAULT NULL,
  `url` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_empresa`),
  KEY `fk_empresa_idx` (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `id_empresa`, `stock`, `url`, `estado`) VALUES
(1, 'ceviche', 'comida del mar', 50, 1, 20, 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Ceviche_mixto_890.JPG', 1),
(2, 'sopa marinera33', 'sopa del mar', 53, 2, 50, 'http://www.photorecipestepbystep.com/wp-content/uploads/2012/10/sopa-marinera.jpg', 0),
(3, 'Helado de coco', 'Gelatina con coco.', 0.75, 2, 30, 'http://4.bp.blogspot.com/-Gzcm8HgW5PM/U6sMRy1XDrI/AAAAAAAAACg/h_nHeS1A9Ic/s850/h2.jpg', 0),
(4, 'Pastel de cumpleaños', 'De tamaño para 15 porciones', 10, 2, 100, 'http://img.fiesta101.com.s3.amazonaws.com/wp-content/uploads/2011/08/torta1.jpg', 0),
(5, 'esfero', 'loja', 12, 2, 200, 'http://www.pceverest.com/imagenes/productos/esfero-espia-dorado.jpg', 0),
(6, 'esfero', 'lojs', 10, 2, 100, 'http://www.pceverest.com/imagenes/productos/esfero-espia-dorado.jpg', 0),
(7, 'ninguno', 'ninguno', 1, 1, 1, 'ninguno', 1),
(8, 'al fin ', 'al fin ', 1, 2, 10, 'http://www.pceverest.com/imagenes/productos/esfero-espia-dorado.jpg', 0),
(9, 'galo', 'galo', 1, 2, 1, 'lslsls', 0),
(10, 'galo', 'galo', 1, 2, 1, 'galogalogalo', 0),
(11, 'jose', 'jose', 1, 1, 1, 'dasd', 1),
(12, 'pedro', 'pedro', 2, 1, 323, 'pedro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE IF NOT EXISTS `valoraciones` (
  `id_valoraciones` int(11) NOT NULL AUTO_INCREMENT,
  `tabla` varchar(45) DEFAULT NULL,
  `valoracion` varchar(250) DEFAULT NULL,
  `id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_valoraciones`,`id_persona`),
  KEY `fk_persona_idx` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_facturas` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `fk_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
