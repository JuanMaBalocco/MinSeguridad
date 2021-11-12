-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema registro_civil
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema registro_civil
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `registro_civil` DEFAULT CHARACTER SET utf8 ;
USE `registro_civil` ;

-- -----------------------------------------------------
-- Table `registro_civil`.`PERSONAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registro_civil`.`PERSONAS` (
  `idPERSONAS` INT NOT NULL AUTO_INCREMENT,
  `dni` INT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `fecha_nac` DATE NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `nacionalidad` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `latitud` VARCHAR(45) NULL,
  `longitud` VARCHAR(45) NULL,
  `estado` TINYINT NULL,
  PRIMARY KEY (`idPERSONAS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `registro_civil`.`PARTIDAS_CARGADAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registro_civil`.`PARTIDAS_CARGADAS` (
  `idPARTIDAS_CARGADAS` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `dni` INT NULL,
  `fecha_nac` DATE NULL,
  `nacionalidad` VARCHAR(45) NULL,
  `tomo` VARCHAR(45) NULL,
  `acta` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `carpeta` VARCHAR(45) NULL,
  `defuncion` TINYINT NULL,
  `fecha_def` DATE NULL,
  PRIMARY KEY (`idPARTIDAS_CARGADAS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `registro_civil`.`SOLICITUDES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registro_civil`.`SOLICITUDES` (
  `idSOLICITUDES` INT NOT NULL AUTO_INCREMENT,
  `estado` TINYINT NULL,
  `dni_solicitud` INT NULL,
  `tomo` VARCHAR(45) NULL,
  `acta` VARCHAR(45) NULL,
  `detalle` VARCHAR(45) NULL,
  `tipo_partida` VARCHAR(45) NULL,
  `fecha_nac` DATE NULL,
  `fecha_def` DATE NULL,
  `PARTIDAS_CARGADAS_idPARTIDAS_CARGADAS` INT NOT NULL,
  `PERSONAS_idPERSONAS` INT NOT NULL,
  PRIMARY KEY (`idSOLICITUDES`),
  INDEX `fk_SOLICITUDES_PARTIDAS_CARGADAS1_idx` (`PARTIDAS_CARGADAS_idPARTIDAS_CARGADAS` ASC),
  INDEX `fk_SOLICITUDES_PERSONAS1_idx` (`PERSONAS_idPERSONAS` ASC),
  CONSTRAINT `fk_SOLICITUDES_PARTIDAS_CARGADAS1`
    FOREIGN KEY (`PARTIDAS_CARGADAS_idPARTIDAS_CARGADAS`)
    REFERENCES `registro_civil`.`PARTIDAS_CARGADAS` (`idPARTIDAS_CARGADAS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SOLICITUDES_PERSONAS1`
    FOREIGN KEY (`PERSONAS_idPERSONAS`)
    REFERENCES `registro_civil`.`PERSONAS` (`idPERSONAS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `registro_civil`.`USUARIOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registro_civil`.`USUARIOS` (
  `idUSUARIOS` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `editado` DATE NULL,
  `rol` VARCHAR(45) NULL,
  `PERSONAS_idPERSONAS` INT NOT NULL,
  PRIMARY KEY (`idUSUARIOS`),
  INDEX `fk_USUARIOS_PERSONAS_idx` (`PERSONAS_idPERSONAS` ASC),
  CONSTRAINT `fk_USUARIOS_PERSONAS`
    FOREIGN KEY (`PERSONAS_idPERSONAS`)
    REFERENCES `registro_civil`.`PERSONAS` (`idPERSONAS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
