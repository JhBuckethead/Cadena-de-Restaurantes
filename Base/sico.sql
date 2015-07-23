-- MySQL Script generated by MySQL Workbench
-- 07/23/15 17:21:59
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sico
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sico` DEFAULT CHARACTER SET utf8 ;
USE `sico` ;

-- -----------------------------------------------------
-- Table `sico`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`categoria` (
  `id_categoria` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`empresa` (
  `id_empresa` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `id_categoria` INT(11) NOT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `url` VARCHAR(300) NOT NULL,
  `estado` INT(11) NOT NULL,
  PRIMARY KEY (`id_empresa`, `id_categoria`),
  INDEX `fk_categoria_idx` (`id_categoria` ASC),
  CONSTRAINT `fk_categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `sico`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`tipo` (
  `id_tipo` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`persona` (
  `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NULL DEFAULT NULL,
  `mail` VARCHAR(45) NULL DEFAULT NULL,
  `sexo` VARCHAR(45) NULL DEFAULT NULL,
  `cedula` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_nacimiento` DATE NULL DEFAULT NULL,
  `telefono` INT(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  `num_cuenta` VARCHAR(45) NULL DEFAULT NULL,
  `id_tipo` INT(11) NOT NULL,
  `usuario` VARCHAR(10) NOT NULL,
  `pass` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_persona`, `id_tipo`),
  INDEX `fk_tipo_idx` (`id_tipo` ASC),
  CONSTRAINT `fk_tipo`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `sico`.`tipo` (`id_tipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`productos` (
  `id_producto` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `precio` DOUBLE NULL DEFAULT NULL,
  `id_empresa` INT(11) NOT NULL,
  `stock` INT(45) NULL DEFAULT NULL,
  `url` VARCHAR(300) NOT NULL,
  `estado` INT(11) NOT NULL,
  PRIMARY KEY (`id_producto`, `id_empresa`),
  INDEX `fk_empresa_idx` (`id_empresa` ASC),
  CONSTRAINT `fk_empresa`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `sico`.`empresa` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`valoraciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`valoraciones` (
  `id_valoraciones` INT(11) NOT NULL AUTO_INCREMENT,
  `tabla` VARCHAR(45) NULL DEFAULT NULL,
  `valoracion` VARCHAR(250) NULL DEFAULT NULL,
  `id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_valoraciones`, `id_persona`),
  INDEX `fk_persona_idx` (`id_persona` ASC),
  CONSTRAINT `fk_persona`
    FOREIGN KEY (`id_persona`)
    REFERENCES `sico`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sico`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`pedido` (
  `id_pedido` INT NOT NULL,
  `id_producto` INT NULL,
  `cantidad` INT NULL,
  `fecha` DATE NULL,
  `id_persona` INT NULL,
  PRIMARY KEY (`id_pedido`),
  INDEX `fk_id_producto_idx` (`id_producto` ASC),
  INDEX `fk_id_persona_idx` (`id_persona` ASC),
  CONSTRAINT `fk_id_producto`
    FOREIGN KEY (`id_producto`)
    REFERENCES `sico`.`productos` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_persona`
    FOREIGN KEY (`id_persona`)
    REFERENCES `sico`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sico`.`pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sico`.`pago` (
  `id_pago` INT NOT NULL,
  `total_pago` DOUBLE NULL,
  `empresa` VARCHAR(45) NULL,
  `id_pedido` INT NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`id_pago`),
  CONSTRAINT `fk_id_pago`
    FOREIGN KEY (`id_pago`)
    REFERENCES `sico`.`pedido` (`id_pedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
