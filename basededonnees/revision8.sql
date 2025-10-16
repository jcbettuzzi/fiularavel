
SET GLOBAL log_bin_trust_function_creators = 1;

ALTER TABLE `blog_posts` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP; 

CREATE TABLE `indexnow` (
  `indexnow_id` int UNSIGNED NOT NULL,
  `datemaj` datetime NOT NULL,
  `offres_id` int UNSIGNED DEFAULT NULL,
  `Ville` varchar(155) DEFAULT NULL,
  `supprime` tinyint NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `indexnow` ADD `image_location` VARCHAR(255) NULL DEFAULT NULL AFTER `url`; 
ALTER TABLE `indexnow` ADD `image_titre` VARCHAR(255) NULL DEFAULT NULL AFTER `image_location`; 

ALTER TABLE `indexnow`
  ADD PRIMARY KEY (`indexnow_id`),
  ADD UNIQUE KEY `urlindex` (`url`);

ALTER TABLE `indexnow`
  MODIFY `indexnow_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

DROP FUNCTION IF EXISTS `indexnow_insert`;

DROP PROCEDURE IF EXISTS `indexnow_select_one_url`;

DROP PROCEDURE IF EXISTS `indexnow_update_Allsupprime`;
DROP PROCEDURE IF EXISTS `indexnow_update_unsupprime`;
DROP PROCEDURE IF EXISTS `indexnow_update_datemaj`;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_update_datemaj` (IN `indexnowid` INT,IN `datemaj1` VARCHAR(19))  MODIFIES SQL DATA
BEGIN
UPDATE indexnow SET datemaj=datemaj1 where indexnow_id=indexnowid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_update_Allsupprime` (IN `sup1` INT)  MODIFIES SQL DATA
BEGIN
UPDATE indexnow SET supprime=sup1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_update_unsupprime` (IN `sup1` INT,IN `indexnowid` INT)  MODIFIES SQL DATA
BEGIN
UPDATE indexnow SET supprime=sup1 where indexnow_id=indexnowid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_select_one_url` (IN `url1` VARCHAR(255))  READS SQL DATA
BEGIN
SELECT * FROM indexnow WHERE url=url1;
END$$


CREATE DEFINER=`root`@`localhost` FUNCTION `indexnow_insert` (`offres_id1` INT, `datemaj1`  VARCHAR(19), 
           `Ville1` VARCHAR(155), `url1` VARCHAR(255)
           , `image_location1` VARCHAR(255), `image_titre1` VARCHAR(255)) RETURNS INT MODIFIES SQL DATA
BEGIN

INSERT INTO `indexnow`( `datemaj`, `offres_id`, `Ville`,  `url`,`image_location`,`image_titre`) 
   VALUES (datemaj1,offres_id1,Ville1,url1,image_location1,image_titre1);
SET @pRecId=LAST_INSERT_ID();
RETURN @pRecId;
END$$

DELIMITER ;

UPDATE versionbdd SET versionNUM=8, libelle="Revision 8";