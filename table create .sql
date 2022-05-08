
--table create for register to oft--


CREATE TABLE `online_fitness_trainer`.`register` ( `id` INT(11) NOT NULL ,
 `firstname` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL ,
 `email` VARCHAR(255) NOT NULL , `plan` VARCHAR(255) NOT NULL ,
 `password` VARCHAR(11) NOT NULL , `person` VARCHAR(40) NOT NULL ,
 `height` INT(40) NOT NULL , `weight` INT(40) NOT NULL ,
 `picture` BLOB NOT NULL ) ENGINE = InnoDB; 

--login--

REATE TABLE `online_fitness_trainer`.`login` ( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`uname` VARCHAR(255) NOT NULL , `u_password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


--contact footer--

ALTER TABLE `contact_footer` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT,
CHANGE `name` `name` VARCHAR(50) NOT NULL, 
CHANGE `email` `email` VARCHAR(50) NOT NULL,
 CHANGE `message` `message` VARCHAR(530) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;  

--contact us page table create--

CREATE TABLE `online_fitness_trainer`.`contact_us` ( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL ,
 `tel` VARCHAR(50) NOT NULL , `message` VARCHAR(500) NOT NULL ,
 PRIMARY KEY (`id`)) ENGINE = InnoDB; 

--payment table--

REATE TABLE `online_fitness_trainer`.`payment` ( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`plan` INT(255) NOT NULL , `method` INT(255) NOT NULL , `holder` INT(255) NOT NULL ,
 `number` INT(100) NOT NULL , `amount` INT(100) NOT NULL , `date` INT(11) NOT NULL ,
 `cv` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


--trainerRegister--

REATE TABLE `online_fitness_trainer`.`trainerregister` ( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`firstname` VARCHAR(255) NOT NULL , `qualification` VARCHAR(255) NOT NULL ,
 `lastname` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL ,
  `repassword` VARCHAR(255) NOT NULL , `birthday` VARCHAR(255) NOT NULL , 
  `address` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `trainerregister` ADD `email` VARCHAR(255) NOT NULL AFTER `lastname`; 

--plan--

--plan basic--

CREATE TABLE `online_fitness_trainer`.`plan_basic` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(255) NOT NULL , `tel` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB; 

--plan premium--

CREATE TABLE `online_fitness_trainer`.`plan_premium` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(255) NOT NULL , `tel` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB; 


 --plan pro--
 CREATE TABLE `online_fitness_trainer`.`plan_pro` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL , `tel` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL ,
   PRIMARY KEY (`id`)) ENGINE = InnoDB; 