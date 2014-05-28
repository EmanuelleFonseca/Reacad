SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `reacad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `reacad` ;

-- -----------------------------------------------------
-- Table `reacad`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reacad`.`aluno` (
  `nomeAluno` VARCHAR(100) NOT NULL,
  `emailAluno` VARCHAR(50) NOT NULL,
  `codigoAluno` INT NOT NULL,
  `telefoneAluno` INT NULL,
  `cursoAluno` VARCHAR(70) NOT NULL,
  `senhaAluno` VARCHAR(10) NOT NULL,
  `curriculo` VARCHAR(10) NULL,
  `imgPerfil` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`emailAluno`),
  UNIQUE INDEX `codigoAluno_UNIQUE` (`codigoAluno` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reacad`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reacad`.`professor` (
  `idProfessor` INT NOT NULL AUTO_INCREMENT,
  `nomeProfessor` VARCHAR(100) NOT NULL,
  `emailProfessor` VARCHAR(50) NOT NULL,
  `telefoneProfessor` INT NULL,
  `senhaProfessor` INT NOT NULL,
  `areaEnsino` VARCHAR(90) NOT NULL,
  `siape` INT NOT NULL,
  PRIMARY KEY (`idProfessor`),
  UNIQUE INDEX `siape_UNIQUE` (`siape` ASC),
  UNIQUE INDEX `emailProfessor_UNIQUE` (`emailProfessor` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reacad`.`projeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reacad`.`projeto` (
  `idprojeto` INT NOT NULL AUTO_INCREMENT,
  `tituloProjeto` VARCHAR(100) NOT NULL,
  `disciplina` VARCHAR(90) NOT NULL,
  `palavrasChave` VARCHAR(100) NOT NULL,
  `projeto` VARCHAR(60) NOT NULL,
  `resumo` VARCHAR(45) NOT NULL,
  `emailAluno` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idprojeto`),
  INDEX `fk_projeto_aluno1_idx` (`emailAluno` ASC),
  CONSTRAINT `fk_projeto_aluno1`
    FOREIGN KEY (`emailAluno`)
    REFERENCES `reacad`.`aluno` (`emailAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reacad`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reacad`.`avaliacao` (
  `idAvaliacao` INT NOT NULL AUTO_INCREMENT,
  `nota` INT NOT NULL,
  `idProfessor` INT NOT NULL,
  `idProjeto` INT NOT NULL,
  PRIMARY KEY (`idAvaliacao`),
  INDEX `fk_avaliacao_professor1_idx` (`idProfessor` ASC),
  INDEX `fk_avaliacao_projeto1_idx` (`idProjeto` ASC),
  CONSTRAINT `fk_avaliacao_professor1`
    FOREIGN KEY (`idProfessor`)
    REFERENCES `reacad`.`professor` (`idProfessor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_projeto1`
    FOREIGN KEY (`idProjeto`)
    REFERENCES `reacad`.`projeto` (`idprojeto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
