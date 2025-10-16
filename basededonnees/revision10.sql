
ALTER TABLE `indexnow` ADD `indexation` tinyint NOT NULL DEFAULT '0' AFTER `image_titre`;


DROP PROCEDURE IF EXISTS `indexnow_update_indexation`;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_update_indexation` (IN `indexation_u` INT,IN `indenow_id_u` INT)  MODIFIES SQL DATA
BEGIN
UPDATE indexnow SET indexation=indexation_u where indexnow_id=indenow_id_u;
END$$

DELIMITER ;


UPDATE versionbdd SET versionNUM=10, libelle="Revision 10";