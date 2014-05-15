SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`photos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`photos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(255) NULL ,
  `date_upload` DATETIME NOT NULL ,
  `photo` VARCHAR(255) NOT NULL ,
  `id_user` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_photos_users_idx` (`id_user` ASC) ,
  CONSTRAINT `fk_photos_users`
    FOREIGN KEY (`id_user` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pseudo` VARCHAR(255) NOT NULL ,
  `nom` VARCHAR(255) NOT NULL ,
  `prenom` VARCHAR(255) NOT NULL ,
  `date_naissance` DATE NOT NULL ,
  `description` VARCHAR(255) NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `date_inscription` DATETIME NOT NULL ,
  `avatar` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_users_photos1_idx` (`avatar` ASC) ,
  CONSTRAINT `fk_users_photos1`
    FOREIGN KEY (`avatar` )
    REFERENCES `mydb`.`photos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users_has_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`users_has_users` (
  `id_user` INT NOT NULL ,
  `id_user2` INT NOT NULL ,
  `id_groupe` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`id_groupe`, `id_user`, `id_user2`) ,
  INDEX `fk_users_has_users_users2_idx` (`id_user2` ASC) ,
  INDEX `fk_users_has_users_users1_idx` (`id_user` ASC) ,
  CONSTRAINT `fk_users_has_users_users1`
    FOREIGN KEY (`id_user` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_users_users2`
    FOREIGN KEY (`id_user2` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`messages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`messages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `id_user` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `content` TEXT NOT NULL ,
  `id_groupe` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_messages_users1_idx` (`id_user` ASC) ,
  INDEX `fk_messages_users_has_users1_idx` (`id_groupe` ASC) ,
  CONSTRAINT `fk_messages_users1`
    FOREIGN KEY (`id_user` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_users_has_users1`
    FOREIGN KEY (`id_groupe` )
    REFERENCES `mydb`.`users_has_users` (`id_groupe` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`statuts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`statuts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `date` DATETIME NOT NULL ,
  `content` VARCHAR(255) NOT NULL ,
  `id_user` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_statuts_users1_idx` (`id_user` ASC) ,
  CONSTRAINT `fk_statuts_users1`
    FOREIGN KEY (`id_user` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`users_friend_request`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`users_friend_request` (
  `id_user` INT NOT NULL ,
  `id_user2` INT NOT NULL ,
  PRIMARY KEY (`id_user`, `id_user2`) ,
  INDEX `fk_users_has_users1_users2_idx` (`id_user2` ASC) ,
  INDEX `fk_users_has_users1_users1_idx` (`id_user` ASC) ,
  CONSTRAINT `fk_users_has_users1_users1`
    FOREIGN KEY (`id_user` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_users1_users2`
    FOREIGN KEY (`id_user2` )
    REFERENCES `mydb`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
