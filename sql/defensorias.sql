-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema defensorias
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema defensorias
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `defensorias` DEFAULT CHARACTER SET utf8 ;
USE `defensorias` ;

-- -----------------------------------------------------
-- Table `defensorias`.`agresor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `defensorias`.`agresor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ci` VARCHAR(10) NULL DEFAULT NULL,
  `ci_exp` VARCHAR(5) NULL DEFAULT NULL,
  `fecha_nacimento` VARCHAR(20) NULL DEFAULT NULL,
  `lugar_nacimiento` VARCHAR(100) NULL DEFAULT NULL,
  `sexo` VARCHAR(1) NULL DEFAULT NULL,
  `procedencia` VARCHAR(10) NULL DEFAULT NULL,
  `edad` VARCHAR(3) NULL DEFAULT NULL,
  `celular` VARCHAR(10) NULL DEFAULT NULL,
  `nombres` VARCHAR(50) NULL DEFAULT NULL,
  `ap_paterno` VARCHAR(50) NULL DEFAULT NULL,
  `ap_materno` VARCHAR(50) NULL DEFAULT NULL,
  `ap_casada` VARCHAR(50) NULL DEFAULT NULL,
  `estado_civil` VARCHAR(50) NULL DEFAULT NULL,
  `instrucción` VARCHAR(50) NULL DEFAULT NULL,
  `ocupacion` VARCHAR(50) NULL DEFAULT NULL,
  `residencia_habitual` VARCHAR(50) NULL DEFAULT NULL,
  `municipio` VARCHAR(30) NULL DEFAULT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  `distrito` VARCHAR(15) NULL DEFAULT NULL,
  `idioma` VARCHAR(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `defensorias`.`victima`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `defensorias`.`victima` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ci` VARCHAR(10) NULL DEFAULT NULL,
  `ci_exp` VARCHAR(5) NULL DEFAULT NULL,
  `fecha_nacimento` VARCHAR(20) NULL DEFAULT NULL,
  `lugar_nacimiento` VARCHAR(100) NULL DEFAULT NULL,
  `sexo` VARCHAR(1) NULL DEFAULT NULL,
  `procedencia` VARCHAR(10) NULL DEFAULT NULL,
  `edad` VARCHAR(3) NULL DEFAULT NULL,
  `celular` VARCHAR(10) NULL DEFAULT NULL,
  `nombres` VARCHAR(50) NULL DEFAULT NULL,
  `ap_paterno` VARCHAR(50) NULL DEFAULT NULL,
  `ap_materno` VARCHAR(50) NULL DEFAULT NULL,
  `ap_casada` VARCHAR(50) NULL DEFAULT NULL,
  `estado_civil` VARCHAR(50) NULL DEFAULT NULL,
  `instrucción` VARCHAR(50) NULL DEFAULT NULL,
  `ocupacion` VARCHAR(50) NULL DEFAULT NULL,
  `numero_hijos` VARCHAR(2) NULL DEFAULT NULL,
  `municipio` VARCHAR(30) NULL DEFAULT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  `distrito` VARCHAR(15) NULL DEFAULT NULL,
  `idioma` VARCHAR(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `defensorias`.`denuncia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `defensorias`.`denuncia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `victima_id` INT(11) NOT NULL,
  `agresor_id` INT(11) NOT NULL,
  `fecha_atencion` VARCHAR(20) NULL DEFAULT NULL,
  `forma_ingreso_servicio` VARCHAR(30) NULL DEFAULT NULL,
  `tipologia` VARCHAR(50) NULL DEFAULT NULL,
  `agresion` VARCHAR(50) NULL DEFAULT NULL,
  `testimonio_denunciante` VARCHAR(500) NULL DEFAULT NULL,
  `descripcion_denuncia` VARCHAR(500) NULL DEFAULT NULL,
  `parentesco_agresor` VARCHAR(20) NULL DEFAULT NULL,
  `acciones_inmediatas` VARCHAR(50) NULL DEFAULT NULL,
  `acciones_coordinadas` VARCHAR(50) NULL DEFAULT NULL,
  `fecha_resultado` VARCHAR(20) NULL DEFAULT NULL,
  `resultados_obtenidos` VARCHAR(250) NULL DEFAULT NULL,
  `num_paginas_adjuntas` VARCHAR(10) NULL DEFAULT NULL,
  `nombre_funcionario_accion` VARCHAR(100) NULL DEFAULT NULL,
  INDEX `fk_denuncia_agresor1_idx` (`agresor_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_denuncia_victima`
    FOREIGN KEY (`victima_id`)
    REFERENCES `defensorias`.`victima` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_denuncia_agresor1`
    FOREIGN KEY (`agresor_id`)
    REFERENCES `defensorias`.`agresor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


















-- ALTER TABLE `agresor`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `denuncia`
-- --
-- ALTER TABLE `denuncia`
--   ADD PRIMARY KEY (`id`,`victima_id`,`agresor_id`),
--   ADD KEY `victima_id` (`victima_id`),
--   ADD KEY `agresor_id` (`agresor_id`);

-- --
-- -- Indexes for table `victima`
-- --
-- ALTER TABLE `victima`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `agresor`
-- --
-- ALTER TABLE `agresor`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
-- --
-- -- AUTO_INCREMENT for table `denuncia`
-- --
-- ALTER TABLE `denuncia`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
-- --
-- -- AUTO_INCREMENT for table `victima`
-- --
-- ALTER TABLE `victima`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
-- --
-- -- Constraints for dumped tables
-- --

-- --
-- -- Constraints for table `denuncia`
-- --
-- ALTER TABLE `denuncia`
--   ADD CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`victima_id`) REFERENCES `victima` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
--   ADD CONSTRAINT `denuncia_ibfk_2` FOREIGN KEY (`agresor_id`) REFERENCES `agresor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
