/*select * from indexnow*/


DROP PROCEDURE IF EXISTS indexnow_select_all;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `indexnow_select_all` ()  READS SQL DATA
BEGIN
    SELECT * FROM indexnow;
END$$

DELIMITER ;


UPDATE versionbdd SET versionNUM=9, libelle="Revision 9";