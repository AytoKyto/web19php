CREATE TABLE `articles` (
	`Id` INT(10) NOT NULL AUTO_INCREMENT,
	`Titre` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Description` TEXT(65535) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`DateAjout` DATE NULL DEFAULT NULL,
	`Auteur` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`ImageRepository` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`ImageFileName` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`categorieid` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`Id`) USING BTREE,
	INDEX `categorieid` (`categorieid`) USING BTREE,
	CONSTRAINT `FK_articles_categorie` FOREIGN KEY (`categorieid`) REFERENCES `cesiblog`.`categorie` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=215
;
CREATE TABLE `categorie` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`libelle` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`icon` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=9
;
