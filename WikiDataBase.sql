-- MySQL Script generated by MySQL Workbench
-- Mon Oct  8 18:07:18 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `heroku_10aa37358da4f01` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `heroku_10aa37358da4f01` DEFAULT CHARACTER SET utf8 ;
USE `heroku_10aa37358da4f01` ;

-- -----------------------------------------------------
-- Table `mydb`.`osrwiki`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_10aa37358da4f01`.`osrwiki` (
  `page` VARCHAR(256) NOT NULL,
  `maininfo` VARCHAR(255) NOT NULL);


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_10aa37358da4f01`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `access` INT(1) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`username`));


-- -----------------------------------------------------
-- Table `mydb`.`edited`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_10aa37358da4f01`.`edited` (
  `page` VARCHAR(256) NOT NULL,
  `maininfo` VARCHAR(255) NOT NULL,
  `username` VARCHAR(16) NULL,
  INDEX `username_idx` (`username` ASC),
  CONSTRAINT `username`
    FOREIGN KEY (`username`)
    REFERENCES `heroku_10aa37358da4f01`.`user` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
