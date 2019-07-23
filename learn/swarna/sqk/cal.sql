CREATE TABLE `appointment`.`appointments` ( `id` INT NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `slot` VARCHAR(10) NOT NULL , `name` VARCHAR(30) NOT NULL ,`email` VARCHAR(30) NOT NULL ,`mobile` VARCHAR(10) NOT NULL ,`message` VARCHAR(50) NOT NULL,  PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `dotkiwis_wp9`.`wp_appointment` ( `id` INT NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `slot` VARCHAR(10) NOT NULL , `name` VARCHAR(30) NOT NULL ,`email` VARCHAR(30) NOT NULL ,`mobile` VARCHAR(10) NOT NULL ,`message` VARCHAR(50) NOT NULL, `person` VARCHAR(50) NOT NULL,`place` VARCHAR(50) NOT NULL PRIMARY KEY (`id`)) ENGINE = InnoDB;

