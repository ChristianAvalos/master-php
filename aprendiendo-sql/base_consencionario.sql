-- MySQL Script generated by MySQL Workbench
-- lun 17 oct 2022 11:25:57 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Coches`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Coches` (
  `idCoches` INT NOT NULL AUTO_INCREMENT,
  `Modelo` VARCHAR(45) NULL,
  `Marca` VARCHAR(45) NULL,
  `Precio` VARCHAR(45) NULL,
  `Stock` VARCHAR(45) NULL,
  PRIMARY KEY (`idCoches`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Grupos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Grupos` (
  `idGrupos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Ciudad` VARCHAR(45) NULL,
  PRIMARY KEY (`idGrupos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vendedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vendedores` (
  `idVendedores` INT NOT NULL AUTO_INCREMENT,
  `Grupo_Id` INT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Cargo` VARCHAR(45) NULL,
  `Fecha_Alta` VARCHAR(45) NULL,
  `Sueldo` VARCHAR(45) NULL,
  `Comision` VARCHAR(45) NULL,
  `Jefe` VARCHAR(45) NULL,
  PRIMARY KEY (`idVendedores`),
  INDEX `fk_Vendedores_Grupos_idx` (`Grupo_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Vendedores_Grupos`
    FOREIGN KEY (`Grupo_Id`)
    REFERENCES `mydb`.`Grupos` (`idGrupos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Clientes` (
  `idClientes` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Ciudad` VARCHAR(45) NULL,
  `Vendedor_Id` INT NULL,
  `Gastado` INT NULL,
  PRIMARY KEY (`idClientes`),
  INDEX `fk_Clientes_Vendedor_idx` (`Vendedor_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Clientes_Vendedor`
    FOREIGN KEY (`Vendedor_Id`)
    REFERENCES `mydb`.`Vendedores` (`idVendedores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Encargos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Encargos` (
  `idEncargos` INT NOT NULL AUTO_INCREMENT,
  `Clientes_Id` INT NULL,
  `Coche_Id` INT NULL,
  `Cantidad` INT NULL,
  `Fecha` DATE NULL,
  PRIMARY KEY (`idEncargos`),
  INDEX `fk_Encargos_Coches_idx` (`Coche_Id` ASC) VISIBLE,
  INDEX `fk_Encargos_Clientes_idx` (`Clientes_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Encargos_Coches`
    FOREIGN KEY (`Coche_Id`)
    REFERENCES `mydb`.`Coches` (`idCoches`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Encargos_Clientes`
    FOREIGN KEY (`Clientes_Id`)
    REFERENCES `mydb`.`Clientes` (`idClientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
